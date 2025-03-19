<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.homepage');
});

Route::get('products', function(){
    return view('web.products');
});

Route::get('product/{slug}', function($slug){
    return "halaman single product - ".$slug;
});

Route::get('categories', function(){
    return view('web.categories');
});

Route::get('categories/{slug}', function($slug){
    return view('web.single_category', ['slug'=>$slug]);
});

Route::get('cart', function(){
    return view('web.cart');
});

Route::get('checkout', function(){
    return view('web.checkout');
});