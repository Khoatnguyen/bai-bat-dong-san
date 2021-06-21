<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\NewsController ;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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
Route::get('/list',[UserController::class,'getList'])->name('view.user.list');
Route::post ('/login',[LoginController::class,'postLogin'])->name('post.login');

Route::group( ['middleware'=>'auth'],function(){
    // ['middleware'=>'auth'] kiểm tra  xem đã đăng nhập hay chưa
    Route::get ('/create-news', [NewsController::class,'CreateNews'])->name('create-news');
    Route::post ('/create-news', [NewsController::class,'postCrateNews']) ->name('post.create.news');

    Route::post ('/district', [MasterController::class,'getDistrict'])->name('get.district');

    Route::post('/ward',[MasterController::class,'getWard'])->name('get.ward');

});


