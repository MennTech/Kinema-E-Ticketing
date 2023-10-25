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

Route::get('/', function () {
    return view('user/details');
});

Route::get('/food', function () {
    return view('user/food');
});

Route::get('/seat', function () {
    return view('user/seat');
});

Route::get('/login', function () {
    return view('user/login');
});

Route::get('/signin', function () {
    return view('user/signin');
});

Route::get('/welcome', function () {
    return view('user/swelcome');
});


