<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Login , Register ,
Route::redirect('/', 'loginPage');
Route::get('loginPage',[AuthController::class,'loginPage'])->name('auth#loginPage');
Route::get('registerPage',[AuthController::class,'registerPage'])->name('auth#registerPage');

//admin

//Category
// Route::group(['prefix'=>'category'],function(){
    
   Route::get('/category/list',[CategoryController::class,'list'])->name('category#list');
//});
//user

