<?php

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
    return view('paginas.index');
});

Route::get('/shop', function () {
    return view('paginas.shop');
});

Route::get('/about', function () {
    return view('paginas.about');
});

Route::get('/services', function () {
    return view('paginas.services');
});

Route::get('/blog', function () {
    return view('paginas.blog');
});

Route::get('/cart', function () {
    return view('paginas.cart');
});
Route::get('/contact', function () {
    return view('paginas.contact');
});

Route::get('/thankyou', function () {
    return view('paginas.thankyou');
});

Route::get('/checkout', function () {
    return view('paginas.checkout');
});