<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('login');
// });

Route::get('/login', function () {
    return view('user/login');
});

Route::get('/signup', function () {
    return view('user/signup');
});

Route::get('/', function () {
    return view('user/home');
});
