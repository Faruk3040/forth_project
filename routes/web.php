<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\User;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[WelcomeController::class,'welcome'])->name('welcome');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'check'])->name('login');
Route::get('/register',[RegisterController::class,'register'])->name('register');
Route::post('/register',[RegisterController::class,'save'])->name('register');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::resource('/products', ProductController::class);
Route::get('/admin_products',[ProductController::class,'addProduct'])->name('addProduct');
