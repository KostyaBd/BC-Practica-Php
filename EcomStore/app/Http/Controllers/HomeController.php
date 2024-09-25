<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;

use App\Models\Cart;

class HomeController extends Controller
{
    public function index()
    {

        $products = Product::all();

        return view('home.userpage', compact('products'));

    }

    public function redirect()
    {

        $usertype = Auth::user()->username;

        if ($usertype == '1') {
            return view('admin.home');
        } else {

            $products = Product::all();

            return view('home.userpage', compact('products'));
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
            if($product->discount_price) {
                $cart->price = $product->discount_price * $request->quantity;
            }
            else {
                $cart->price = $product->price * $request->quantity;
            }

            $cart->image = $product->image;
            $cart->product_id = $product->id;

            $cart->quantity = $request->quantity;

            $product->quantity -= $cart->quantity;

            $cart->save();
            $product->save();

            return redirect()->back()->with('message','Product Added To Cart Successfully');

        } else {
            return redirect('/login');
        }
    }

    public function shopping_cart()
    {
        if(Auth::id()){
            $id = Auth::user()->id;

//            $cart = Cart::all();

            $cart = Cart::where('user_id', '=', $id)->get();

            return view('home.shopping_cart', compact('cart'));
        }
        else {
            return redirect('/login');
        }
    }

}
