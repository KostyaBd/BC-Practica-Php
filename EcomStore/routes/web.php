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

Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/view_category',[AdminController::class,'view_category']);

Route::post('/add_category',[AdminController::class,'add_category']);

Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

Route::get('/delete_category_with_products/{id}/{category_name}', [AdminController::class, 'delete_category_with_products']);

Route::get('/delete_order/{id}',[AdminController::class,'delete_order']);

Route::get('/orders_active',[AdminController::class,'orders_active']);

Route::get('/orders_history',[AdminController::class,'orders_history']);

Route::get('/mark_done_order/{id}',[AdminController::class,'mark_done_order']);

Route::get('/mark_undone_order/{id}',[AdminController::class,'mark_undone_order']);

Route::get('/view_users',[AdminController::class,'view_users']);

Route::get('/edit_user/{id}',[AdminController::class,'edit_user']);

Route::get('/view_products',[AdminController::class,'view_products']);

Route::post('/add_products',[AdminController::class,'add_products']);

Route::get('/show_products', [AdminController::class, 'show_products'])->name('admin.show_products');

Route::post('/edit_product_confirm/{id}',[AdminController::class,'edit_product_confirm']);

Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);

Route::get('/edit_product/{id}',[AdminController::class,'edit_product']);

Route::post('/edit_user_confirm/{id}',[AdminController::class,'edit_user_confirm']);





Route::get('/product_details/{id}',[HomeController::class,'product_details']);

Route::post('/add_to_cart/{id}',[HomeController::class,'add_to_cart']);

Route::get('/cash_payment',[HomeController::class,'cash_payment']);

Route::get('/shopping_cart',[HomeController::class,'shopping_cart']);

Route::get('/category/{category}', [HomeController::class, 'get_products_by_category'])->name('category.products');

Route::get('/contact',[HomeController::class,'contact']);

Route::get('/blog',[HomeController::class,'blog']);


