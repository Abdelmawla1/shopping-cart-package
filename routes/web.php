<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CartController;

Route::get('/', function () {
   return view('welcome');
});

Route::get('shop', [CartController::class,'shop'])->name('shop');
Route::get('cart', [CartController::class,'cart'])->name('cart');
