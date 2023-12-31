<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;



Route::middleware(['auth'])->group(function () {

    Route::resource('products',ProductController::class);

    Route::get('/', function () {
        return view('welcome');
    })->name('index');
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('delete');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});


    Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});
