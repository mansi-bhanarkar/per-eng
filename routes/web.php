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
    return view('frontend.home');
})->name('home');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::get('/product', function () {
    return view('frontend.product');
})->name('product');
Route::get('/product-inner', function () {
    return view('frontend.product-inner');
})->name('productinner');
