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
    return view('index');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/cms', function () {
    return view('cms');
});
Route::get('/cooming-soon', function () {
    return view('cooming-soon');
});
Route::get('/howitworks', function () {
    return view('howitworks');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/productpage', function () {
    return view('productpage');
});

Route::get('/profile', function () {
    return view('profile');
});


