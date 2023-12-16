<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;

//Login , Register ,
Route::redirect('/', 'loginPage');
Route::get('loginPage',[AuthController::class,'loginPage'])->name('auth#loginPage');
Route::get('registerPage',[AuthController::class,'registerPage'])->name('auth#registerPage');

//Milddeware
Route::middleware([ 'auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    //Category
    Route::group(['prefix'=>'category'],function(){
       Route::get('list',[CategoryController::class,'list'])->name('category#list');
    });
});


//user

