<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('index');


Route::group(['prefix' => 'contacto'], function(){
    Route::view('/', 'contact')->name('contact');
    Route::post('/', ContactController::class)->name('contact.email');
});

Route::resource('productos', ProductController::class)->only(['index', 'show']);

Route::group(['prefix' => 'login'], function(){
    Route::get('/{driver}', [LoginController::class, 'redirectToDriver'])->name('login-driver');
    Route::get('/{driver}/callback', [LoginController::class, 'handleDriverCallback']);
});

Route::resource('carrito', CartController::class);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

