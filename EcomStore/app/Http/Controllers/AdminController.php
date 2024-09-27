<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;


use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    public function view_category()
    {
        if (Auth::id()) {

            $categories = Category::with('products')->get();

            $categories_data = $categories->map(function ($category) {
                return [
                    'category_name' => $category->category_name,
                    'total_products' => $category->products->count(),
                    'active_products' => $category->products->where('quantity', '>=', 1)->count(),
                    'id' => $category->id,
                ];
            });


            return view('admin.category', compact('categories', 'categories_data'));
        } else {
            return redirect('/login');
        }


    }

    public function add_category(Request $request)
    {

        if (Auth::id()) {

            $data = new category;

            $data->category_name = $request->category_name;

            $data->save();

            return redirect()->back()->with('message', 'Category Added Successfully');
        } else {
            return redirect('/login');
        }


    }

    public function delete_category($id)
    {

        if (Auth::id()) {

            $data = category::find($id);
            $data->delete();

            return redirect()->back()->with('message', 'Category Deleted Successfully');
        } else {
            return redirect('/login');
        }

    }

    public function delete_category_with_products($id, $category_name)
    {

        if (Auth::id()) {

            $data = Category::find($id);
            Product::where('category', $category_name)->delete();

            $data->delete();

            return redirect()->back()->with('message', 'Category Deleted Successfully');
        } else {
            return redirect('/login');
        }

    }

    public function view_products()
    {

        if (Auth::id()) {

            $category = category::all();
            return view('admin.products', compact('category'));
        } else {
            return redirect('/login');
        }

    }

    public function add_products(Request $request)
    {

        if (Auth::id()) {

            $product = new product;

            $product->title = $request->title;
            $product->description = $request->description;
            $product->quantity = $request->quantity;
            $product->category = $request->category;

            $product->price = $request->price;
            $product->discount_price = $request->discount;

            if ($request->discount >= $product->price) {

                $product->discount_price = null;
            } else {
                $product->discount_price = $request->discount;
            }

            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('products', $imagename);
            $product->image = $imagename;


            $product->save();

            return redirect()->back()->with('message', 'Product Added Successfully');
        } else {
            return redirect('/login');
        }


    }

    public function show_products()
    {

        if (Auth::id()) {

            $products = product::all();
            return view('admin.show_products', compact('products'));
        } else {
            return redirect('/login');
        }
    }

    public function delete_product($id)
    {

        if (Auth::id()) {

            $product = product::find($id);
            $product->delete();

            return redirect()->back()->with('message', 'Product Deleted Successfully');
        } else {
            return redirect('/login');
        }

    }

    public function edit_product($id)
    {

        if (Auth::id()) {

            $product = product::find($id);
            $category = category::all();

            return view('admin.edit_product', compact('product', 'category'));
        } else {
            return redirect('/login');
        }
    }

    public function edit_product_confirm($id, Request $request)
    {
        if (Auth::id()) {

            $product = product::find($id);

            $product->title = $request->title;
            $product->description = $request->description;
            $product->quantity = $request->quantity;
            $product->category = $request->category;
            $product->price = $request->price;

            if ($request->discount >= $product->price) {

                $product->discount_price = null;
            } else {
                $product->discount_price = $request->discount;
            }

            $image = $request->file('image');
            if ($image) {
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $request->image->move('products', $imagename);
                $product->image = $imagename;
            }


            $product->save();

            return redirect()->route('admin.show_products')->with('message', 'Product Updated Successfully');
        } else {
            return redirect('/login');
        }
    }

    public function delete_order($id)
    {

        if (Auth::id()) {

            $order = Order::find($id);
            $order->delete();

            return redirect()->back()->with('message', 'Order Deleted Successfully');
        } else {
            return redirect('/login');
        }

    }

    public function orders_active()
    {
        if (Auth::id()) {

            $orders = Order::where('delivery_status', "processing")->get();

            return view('admin.orders_active', compact('orders'));
        } else {
            return redirect('/login');
        }
    }

    public function orders_history()
    {
        if (Auth::id()) {

            $orders = Order::where('delivery_status', "done")->get();

            return view('admin.orders_history', compact('orders'));
        } else {
            return redirect('/login');
        }
    }

    public function mark_done_order($id)
    {

        if (Auth::id()) {

            $order = Order::find($id);
            $order->delivery_status = "done";

            $order->save();

            return redirect()->back()->with('message', 'Order Status Changed Successfully');
        } else {
            return redirect('/login');
        }

    }

    public function mark_undone_order($id)
    {

        if (Auth::id()) {

            $order = Order::find($id);
            $order->delivery_status = "processing";

            $order->save();

            return redirect()->back()->with('message', 'Order Status Changed Successfully');
        } else {
            return redirect('/login');
        }

    }

    public function view_users()
    {
        if (Auth::id()) {
            $users = User::all();
            return view('admin.view_users', compact('users'));
        } else {
            return redirect('/login');
        }
    }

    public function remove_user($id)
    {
        if (Auth::id()) {
            $user = User::find($id);
            $user->delete();

            return redirect()->back()->with('message', 'User Deleted Successfully');
        } else {
            return redirect('/login');
        }
    }

    public function edit_user($id)
    {

        if (Auth::id()) {

            $user = User::find($id);

            return view('admin.edit_user', compact( 'user'));
        } else {
            return redirect('/login');
        }
    }

    public function edit_user_confirm($id, Request $request)
    {
        if (Auth::id()) {

            $user = User::find($id);

            $user->name = $request->name;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->password = $request->password;


            $user->save();

            return redirect()->route('admin.view_users')->with('message', 'User Updated Successfully');
        } else {
            return redirect('/login');
        }
    }


}
