<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

Route::get('/',[HomeController::class,'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('redirect',[HomeController::class,'redirect']);

Route::get('/view_category',[AdminController::class,'view_category']);

Route::post('/add_category',[AdminController::class,'add_category']);

Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);


Route::get('/view_products',[AdminController::class,'view_products']);

Route::post('/add_products',[AdminController::class,'add_products']);

Route::get('/show_products', [AdminController::class, 'show_products'])->name('admin.show_products');

Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);

Route::get('/edit_product/{id}',[AdminController::class,'edit_product']);

Route::post('/edit_product_confirm/{id}',[AdminController::class,'edit_product_confirm']);

Route::get('/product_details/{id}',[HomeController::class,'product_details']);


