<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('index');
Route::view('/contacto', 'contact')->name('contact');
Route::post('/contacto', ContactController::class)->name('contact.email');

Route::resource('productos', ProductController::class)->only(['index', 'show']);

// Route::get('checkout', CheckoutController::class)->name('checkout');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
