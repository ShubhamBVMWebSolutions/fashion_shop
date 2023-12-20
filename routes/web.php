<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shopController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ChatController;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/',[shopController::class,'index'])->name('/');
Route::get('shop',[shopController::class,'shop'])->name('shop');
Route::get('cart',[shopController::class,'cart'])->name('cart');
Route::post('add_cart',[shopController::class,'add_cart'])->name('add_cart');
Route::get('login',[loginController::class,'login'])->name('login');
Route::post('register',[loginController::class,'register'])->name('register');
Route::post('user_login',[loginController::class,'user_login'])->name('user_login');
Route::get('logout',[loginController::class,'logout'])->name('logout');
Route::post('pay',[PaymentController::class,'pay'])->name('pay');
Route::get('success',[PaymentController::class,'success']);
Route::get('error',[PaymentController::class,'error']);
Route::get('remove_product/{id}',[shopController::class,'remove_product']);
Route::post('add_wishlist',[shopController::class,'add_wishlist'])->name('add_wishlist');
Route::get('wishlist',[shopController::class,'wishlist'])->name('wishlist');
Route::post('inquiry',[shopController::class,'inquiry'])->name('inquiry');
Route::post('update_response_status',[shopController::class,'update_response_status']);

Route::get('adminDashboard',[shopController::class,'adminDashboard'])->name('adminDashboard');
Route::get('all_products',[shopController::class,'all_products'])->name('all_products');
Route::get('add_products',[shopController::class,'add_products'])->name('add_products');
Route::post('addNewProduct',[shopController::class,'addNewProduct'])->name('addNewProduct');
Route::get('user_cart/{id}',[shopController::class,'user_cart'])->name('user_cart');
Route::get('edit_products/{id}',[shopController::class,'edit_products'])->name('edit_products');
Route::post('update_product_status/{id}',[shopController::class,'update_product_status'])->name('update_product_status');
Route::get('order/{id}',[shopController::class,'order']);
Route::get('user_wishlist/{id}',[shopController::class,'user_wishlist']);



Route::get('/getmessages', [ChatController::class, 'getmessages'])->name('getmessages');
// Route::post('/chat/send', [ChatController::class, 'sendMessage']);
Route::post('sendmessage', [ChatController::class, 'sendMessage']);


Route::get('filter',[shopController::class,'filter'])->name('filter');
Route::get('price_filter',[shopController::class,'price_filter'])->name('price_filter');
Route::get('tag_filter',[shopController::class,'tag_filter'])->name('tag_filter');
Route::get('brand_filter',[shopController::class,'brand_filter'])->name('brand_filter');
