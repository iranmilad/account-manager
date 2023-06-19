<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test', function () {
    return 'Hello, Successful';
});

Route::post('/test', function () {
    return 'Hello, Successful';
});


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});


Route::get("/settings",function () {
    return view('settings');
});

Route::get("/subscriptions",function () {
    return view('subscriptions');
});

Route::get("/account",function () {
    return view('account');
});

Route::get("/updates",function () {
    return view('updates');
});

Route::get("/issuereporting",function () {
    return view('issuereporting');
});

Route::get("/technicalreporting",function () {
    return view('technicalreporting');
});

Route::get("/topics",function () {
    return view('topics');
});

Route::get("/products",function () {
    return view('products');
});

Route::get("/productscategory",function () {
    return view('productsCategory');
});

Route::get("/messages",function () {
    return view('messages');
});

Route::get("/invoicesmanager",function () {
    return view('invoicesManager');
});