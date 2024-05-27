<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;

//Login , Register ,
Route::redirect('/', 'loginPage');
Route::get('loginPage',[AuthController::class,'loginPage'])->name('auth#loginPage');
Route::get('registerPage',[AuthController::class,'registerPage'])->name('auth#registerPage');

Route::middleware([ 'auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    //dashboard
    Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');

  //admin
    //Category
    Route::group(['prefix'=>'category',],function(){
       Route::get('list',[CategoryController::class,'list'])->name('category#list');
    });

    //user
    //home
   Route::group(['prefix'=>'user'],function(){
     Route::get('home', function(){
        return view('user.home');   
       })->name('user#home');
   });
});




