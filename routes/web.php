<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard' , function () {
    return view('dashboard');
});

Route::get('admin/login' , function() {
    return view('login');
});


Route::post('/admin/dashboard' , [LoginController::class, 'admin_verification']);

// add category
Route::get('/admin/add-category', function() {
    return view('add-category');
});

Route::post('/admin/add-category' , [CategoryController::class , 'insert_category']);

Route::get('/admin/category' , [CategoryController::class , 'get_category']);

Route::get('/admin/category/{id}' , [CategoryController::class , 'delete_category']);

Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit_category']);

Route::post('/admin/category/update/{id}', [CategoryController::class, 'update_category']);


//brand
Route::get('/admin/add-brand', function() {
    return view('add-brand');
});

Route::post('/admin/add-brand' , [BrandController::class , 'insert_brand']);

Route::get('/admin/brand' , [BrandController::class, 'get_brands']);

Route::get('/admin/brand/{id}' , [BrandController::class , 'delete_brand']);

Route::get('/admin/brand/edit/{id}' , [BrandController::class , 'show_brand']);

Route::post('/admin/brand/update/{id}' , [BrandController::class , 'update_brand']);


//Unit
Route::get('/admin/add-unit', function() {
    return view('add-unit');
});
Route::post('/admin/add-unit' , [UnitController::class , 'insert_unit']);

Route::get('/admin/unit' , [UnitController::class , 'get_units']);

Route::get('/admin/unit/{id}' , [UnitController::class , 'delete_unit']);

Route::get('/admin/unit/edit/{id}' , [UnitController::class , 'show_unit']);

Route::post('/admin/unit/update/{id}' , [UnitController::class , 'update_unit']);


//product
Route::get('/admin/products', [ProductController::class, 'get_products']);

Route::get('/admin/add-product', [ProductController::class, 'show_add_product_form']);

Route::post('/admin/add-product', [ProductController::class, 'insert_product']);

Route::get('/admin/product/edit/{id}', [ProductController::class, 'show_edit_product_form']);

Route::post('/admin/product/update/{id}', [ProductController::class, 'update_product']);

Route::get('/admin/product/delete/{id}', [ProductController::class, 'delete_product']);

// Route::get('/product/{id}', [ProductController::class, 'show']);


//Cart

Route::get('/', [CartController::class, 'index_products']);
Route::get('/product/{id}' , [CartController::class, 'show_products']);

// Cart-related routes
Route::get('/cart', [CartController::class, 'show_cart'])->name('cart.show');
Route::post('/cart/add', [CartController::class, 'add_to_cart'])->name('cart.add');
Route::get('/cart/item', [CartController::class, 'show_single_cart_item'])->name('cart.show_single');
Route::post('/cart/proceed', [CartController::class, 'proceed_to_checkout'])->name('cart.proceed');
Route::delete('/cart/delete/{id}', [CartController::class, 'delete_cart_item'])->name('cart.delete');
Route::post('/cart/order_now', [CartController::class, 'order_now'])->name('cart.order_now');
