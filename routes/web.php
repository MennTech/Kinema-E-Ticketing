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
    return view('admin/landingPage',[
        'title' => 'dashboard',
        'foto_profile' => 'admin2.jpg',
        'name' => 'Budi Subawa',
        'card' => [
            [
                'images' => 'admin2.jpg',
                'card_title'=> 'Ticket Sale Today',
                'value'=> '80',

            ],
            [
                'images' => '1.jpg',
                'card_title'=> 'Ticket Sale',
                'value'=> '250',

            ],
            [
                'images' => '1.jpg',
                'card_title'=> 'Income Today',
                'value'=> '2400000',

            ],
            [
                'images' => '1.jpg',
                'card_title'=> 'Income Total',
                'value'=> '7500000',

            ],
        ],
        'table_value' => [
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'create_date' => '01-01-2023',
            ],
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'create_date' => '01-01-2023',
            ],
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'create_date' => '01-01-2023',
            ],
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'create_date' => '01-01-2023',
            ],
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'create_date' => '01-01-2023',
            ],
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'create_date' => '01-01-2023',
            ],
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'create_date' => '01-01-2023',
            ],
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'create_date' => '01-01-2023',
            ],
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'create_date' => '01-01-2023',
            ],
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'create_date' => '01-01-2023',
            ],
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'create_date' => '01-01-2023',
            ],
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'create_date' => '01-01-2023',
            ],
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'create_date' => '01-01-2023',
            ],
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'create_date' => '01-01-2023',
            ],
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'create_date' => '01-01-2023',
            ],
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'create_date' => '01-01-2023',
            ],
        ]
    ]);
});

Route::get('/Data-Film', function () {
    return view('admin/dataFilm',[
        'title' => 'data_film',
        'foto_profile' => 'user2.jpg',
        'name' => 'Budi Subawa',
    ]);
});