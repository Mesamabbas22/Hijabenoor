<?php

use App\Http\Controllers\product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authenticate;
use App\Http\Controllers\category;
use App\Http\Controllers\brand;
use App\Http\Controllers\countrys;
use App\Http\Controllers\cart;
use App\Http\Controllers\reviews;
use App\Http\Controllers\customerUserController;

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
    return view('home');
});
Route::view('shop','shop');
Route::view('product','single-product');
Route::get('cart',[cart::class,'index']);
Route::get('addtocart/{id}',[cart::class,'addToCard']);
Route::patch('updatetocart',[cart::class,'updateTOcart']);
Route::delete('deletecart',[cart::class,'deleteCart']);
Route::view('checkout','checkout');
Route::view('login','login');
Route::view('signup','register');

Route::group(['prefix'=>'admin/' ,'as'=> 'admin.','middleware'=> 'logedin'],function(){
        Route::get('dashboard',function(){
            return view('admin.dashboard');
        });
        Route::get('category',function(){
            return view('admin.category');
        });
        Route::get('product',function(){
            return view('admin.product');
        });
        Route::get('brand',function(){
            return view('admin.brand');
        });
    });
    Route::resource('customerUserController',customerUserController ::class);
    Route::resource('admin/customerReviews',reviews::class);
    Route::resource('admin/categorycontroller',category::class);
    Route::resource('admin/productController',product::class);
    Route::resource('admin/countrysController',countrys::class);
    Route::resource('admin/brandController',brand::class);
    Route::resource('admin/login',authenticate::class)->only(['index', 'store']);
    // Route::get('admin/login',function(){
    //     return view('admin.login');
    // });
