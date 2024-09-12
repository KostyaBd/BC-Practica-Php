<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;

class AdminController extends Controller
{
    public function view_category(){

//        select all the data from category table
        $data = category::all();

        return view('admin.category', compact('data'));

    }

    public function add_category(Request $request){

        $data = new category;

        $data->category_name = $request->category_name;

        $data->save();

        return redirect()->back()->with('message','Category Added Successfully');

    }

    public function delete_category($id){

        $data = category::find($id);
        $data -> delete();

        return redirect()->back()->with('message','Category Deleted Successfully');
    }

    public function view_products(){

        $category = category::all();
        return view('admin.products', compact('category'));
    }

    public function add_products(Request $request){

        $product = new product;

        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->discount;
        $product->category=$request->category;

        $image=$request->file('image');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('products',$imagename);
        $product->image = $imagename;


        $product->save();

        return redirect()->back()->with('message','Product Added Successfully');

    }

    public function show_products(){

        $products = product::all();
        return view('admin.show_products', compact('products'));
    }

    public function delete_product($id){

        $product = product::find($id);
        $product -> delete();

        return redirect()->back()->with('message','Product Deleted Successfully');
    }

    public function edit_product($id){

        $product = product::find($id);
        $category = category::all();

        return view('admin.edit_product', compact('product', 'category'));
    }

    public function edit_product_confirm($id, Request $request)
    {

        $product = product::find($id);

        $product->title=$request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discount_price = $request->discount;
        $product->category = $request->category;

        $image=$request->file('image');
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('products',$imagename);
            $product->image = $imagename;
        }


        $product->save();

        return redirect()->route('admin.show_products')->with('message', 'Product Updated Successfully');

    }

}
