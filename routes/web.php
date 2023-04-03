<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authenticate;
use App\Http\Controllers\category;

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

Route::group(['prefix'=>'admin/' ,'as'=> 'admin.'],function($group){
    Route::group(['middleware'=>['auth']],function($router){
        $router->get('dashboard',function(){
            return view('admin.dashboard');
        });
        Route::resource('category',category::class);
    });
    $group->resource('login',authenticate::class);
    // Route::get('admin/login',function(){
    //     return view('admin.login');
    // });
});
