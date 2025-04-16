<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;


Route::get('/',[HomePageController::class,'index']);


Route::get('products', [HomePageController::class, 'products']);


Route::get('product/{slug}', [HomePageController::class, 'product']);


Route::get('categories',[HomePageController::class, 'categories']);


Route::get('category/{slug}', [HomePageController::class, 'category']);


Route::get('cart', [HomePageController::class, 'cart']);


Route::get('checkout', [HomePageController::class, 'checkout']);