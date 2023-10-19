<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/welcome', function () {
    return view('welcome');
});
