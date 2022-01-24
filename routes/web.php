<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[UserController::class,'login'])->name('login');

Route::get('/',[ProductController::class,'index']);

Route::get('/detail/{id}',[ProductController::class,'detail']);

Route::post('add_to_cart',[ProductController::class,'addToCart']);

Route::get('/cartlist',[ProductController::class,'cartlist']);

Route::get('removecart/{id}',[ProductController::class,'removeCart']);

Route::get('ordernow',[ProductController::class,'orderNow']);

Route::post('orderplace',[ProductController::class,'orderPlace']);

Route::get('myorders',[ProductController::class,'myOrders']);

Route::view('register', 'register');

Route::post('register',[UserController::class,'register']);


Route::get('/logout',function () {

    session()->forget('user');
    return redirect('login');
});
