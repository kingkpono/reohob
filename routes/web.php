<?php

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
    return view('welcome');
});

Route::get('/product-list', function () {
    return view('products');
});


Route::get('/services', function () {
    return view('services');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/initiative', function () {
    return view('initiative');
});
Route::get('/support', function () {
    return view('support');
});

Route::get('/contact-us', function () {
    return view('support');
});
