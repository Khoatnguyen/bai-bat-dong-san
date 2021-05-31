<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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


Route::get('/',[IndexController::class,'index'])->name('home');
Route::get ('/register',[RegisterController::class,'register'])->name('register');
Route::post ('/register',[RegisterController::class,'postRegister'])->name('post.register');
Route::get ('/login',[LoginController::class,'login'])->name('login');
Route::post ('/login',[LoginController::class,'postLogin'])->name('post.login');