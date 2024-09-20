<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;

class HomeController extends Controller
{
    public function index(){

            $products = Product::all();

            return view('home.userpage', compact('products'));

    }
    public function redirect(){

        $usertype=Auth::user()->username;

        if($usertype=='1'){
            return view('admin.home');
        }
        else{

            $products = Product::all();

            return view('home.userpage', compact('products'));
        }
    }

    public function product_details($id)
    {
        $product = Product::find($id);


        return view('home.product_details',compact('product'));

    }
}
