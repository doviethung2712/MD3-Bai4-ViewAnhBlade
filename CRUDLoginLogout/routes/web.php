<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('CheckAuth')->group(function(){
    Route::prefix('brand')->group(function(){
        Route::get('index',[BrandController::class,'index'])->name('brand.index');
        Route::get('{id}/detail',[BrandController::class,'show'])->name('brand.detail');
        Route::get('create',[BrandController::class,'create'])->name('brand.create');
        Route::post('create',[BrandController::class,'store'])->name('brand.store');
        Route::get('{id}/delete',[BrandController::class,'destroy'])->name('brand.delete');
        Route::get('{id}/edit',[BrandController::class,'edit'])->name('brand.edit');
        Route::post('{id}/update',[BrandController::class,'update'])->name('brand.update');
    });
});



Route::get('register',[AuthController::class,'showFromRegister'])->name('fromRegister');
Route::post('register',[AuthController::class,'checkRegister'])->name('register');
Route::get('login',[AuthController::class,'showFromLogin'])->name('showFormLogin');
Route::post('login',[AuthController::class,'checkLogin'])->name('login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');

