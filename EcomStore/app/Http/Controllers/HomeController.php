<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;

use App\Models\Cart;

use App\Models\Order;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('products')->get();
        $totalProducts = Product::where('quantity', '>=', 1)->count();
        $products = Product::where('quantity', '>=', 1)->get();

        return view('home.userpage', compact('products', 'categories', 'totalProducts'));
    }

    public function redirect()
    {
        if(Auth::id()){

            $usertype = Auth::user()->username;

            if ($usertype == '1') {

                $total_products = Product::all()->count();
                $total_products_active = Product::where('quantity', '>=', 1)->count();
                $active_orders = Order::all()->count();
                $total_users = User::where('username', '0',0)->count();
                $orders = Order::where('delivery_status', "processing")->limit(10)->get();

                return view('admin.home', compact('orders', 'total_products', 'total_products_active', 'active_orders', 'total_users'));
            } else {

                return $this->index();
            }
        }else{
            return redirect('/login');
        }


    }

    public function product_details($id)
    {
        $product = Product::find($id);


        return view('home.product_details', compact('product'));

    }

    public function add_to_cart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $product = Product::find($id);

            $cart = new Cart;

            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;

            $cart->product_title = $product->title;
            if ($product->discount_price) {
                $cart->price = $product->discount_price * $request->quantity;
            } else {
                $cart->price = $product->price * $request->quantity;
            }

            $cart->image = $product->image;
            $cart->product_id = $product->id;

            $cart->quantity = $request->quantity;

            $product->quantity -= $cart->quantity;

            $cart->save();
            $product->save();

            return redirect()->back()->with('message', 'Product Added To Cart Successfully');

        } else {
            return redirect('/login');
        }
    }

    public function shopping_cart()
    {
        if (Auth::id()) {
            $id = Auth::user()->id;

//            $cart = Cart::all();

            $cart = Cart::where('user_id', '=', $id)->get();

            return view('home.shopping_cart', compact('cart'));
        } else {
            return redirect('/login');
        }
    }

    public function cash_payment()
    {
        if (Auth::id()) {
            $user_id = Auth::user()->id;

            $data = Cart::where('user_id', '=', $user_id)->get();

            if ($data->isEmpty()) {
                return redirect()->back()->with('message', 'Cart is empty, please add product first');
            }

            foreach ($data as $data) {
                $order = new Order;

                $order->name = $data->name;
                $order->email = $data->email;
                $order->phone = $data->phone;
                $order->address = $data->address;
                $order->user_id = $data->user_id;
                $order->product_title = $data->product_title;
                $order->quantity = $data->quantity;

                if ($data->discount_price) {
                    $order->price = $data->discount_price * $data->quantity;
                } else {
                    $order->price = $data->price * $data->quantity;
                }

                $order->price = $data->price;
                $order->image = $data->image;
                $order->product_id = $data->product_id;

                $order->payment_status = 'cash on delivery';
                $order->delivery_status = 'processing';

                $order->save();

                $cart_id = $data->id;
                $cart = cart::find($cart_id);
                $cart->delete();

            }


            return redirect()->back()->with('message', 'Order Completed Successfully, our administrator will contact you shortly');
        } else {
            return redirect('/login');
        }

    }

    public function get_products_by_category($category_name)
    {
        $categories = Category::withCount('products')->get();
        $totalProducts = Product::count();

        if ($category_name === 'all') {
            $products = Product::all();
        } else {
            $products = Product::where('category', $category_name)->get();
        }

        return view('home.userpage', compact('products', 'categories', 'totalProducts'));
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function blog()
    {
        return view('home.blog');
    }


}
