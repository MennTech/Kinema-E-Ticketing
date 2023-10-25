<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', function () {
    return view('user/home');
});

Route::get('/login', function () {
    return view('user/login');
});

Route::get('/signup', function () {
    return view('user/signup');
});

Route::get('/Admin', function () {
    return view('admin/landingPage',[
        'title' => 'dashboard',
        'foto_profile' => 'user2.jpg',
        'name' => 'Budi Subawa',
        'card' => [
            [
                'images' => 'ticket.jpg',
                'card_title'=> 'Ticket Sale',
                'value'=> '80',

            ],
            [
                'images' => 'food.jpg',
                'card_title'=> 'Food Sale',
                'value'=> '50',

            ],
            [
                'images' => 'income.jpg',
                'card_title'=> 'Income Today',
                'value'=> '2400000',

            ],
            [
                'images' => 'income.jpg',
                'card_title'=> 'Income Total',
                'value'=> '7500000',

            ],
        ],
        'table_value' => [
            [
                'name' => 'Trisna',
                'email' => 'utama@gmail.com',
                'no_telp' => '081234567891',
                'create_date' => '01-01-2023',
            ],
            [
                'name' => 'John',
                'email' => 'john@example.com',
                'no_telp' => '081234567892',
                'create_date' => '02-01-2023',
            ],
            [
                'name' => 'Sarah',
                'email' => 'sarah@example.com',
                'no_telp' => '081234567893',
                'create_date' => '03-01-2023',
            ],
            [
                'name' => 'David',
                'email' => 'david@example.com',
                'no_telp' => '081234567894',
                'create_date' => '04-01-2023',
            ],
            [
                'name' => 'Linda',
                'email' => 'linda@example.com',
                'no_telp' => '081234567895',
                'create_date' => '05-01-2023',
            ],
            [
                'name' => 'Michael',
                'email' => 'michael@example.com',
                'no_telp' => '081234567896',
                'create_date' => '06-01-2023',
            ],
            [
                'name' => 'Emily',
                'email' => 'emily@example.com',
                'no_telp' => '081234567897',
                'create_date' => '07-01-2023',
            ],
            [
                'name' => 'Robert',
                'email' => 'robert@example.com',
                'no_telp' => '081234567898',
                'create_date' => '08-01-2023',
            ],
            [
                'name' => 'Jennifer',
                'email' => 'jennifer@example.com',
                'no_telp' => '081234567899',
                'create_date' => '09-01-2023',
            ],
            [
                'name' => 'Daniel',
                'email' => 'daniel@example.com',
                'no_telp' => '081234567890',
                'create_date' => '10-01-2023',
            ],
            [
                'name' => 'Lisa',
                'email' => 'lisa@example.com',
                'no_telp' => '081234567891',
                'create_date' => '11-01-2023',
            ],
            [
                'name' => 'William',
                'email' => 'william@example.com',
                'no_telp' => '081234567892',
                'create_date' => '12-01-2023',
            ],
            [
                'name' => 'Mia',
                'email' => 'mia@example.com',
                'no_telp' => '081234567893',
                'create_date' => '13-01-2023',
            ],
            [
                'name' => 'Richard',
                'email' => 'richard@example.com',
                'no_telp' => '081234567894',
                'create_date' => '14-01-2023',
            ],
            [
                'name' => 'Jessica',
                'email' => 'jessica@example.com',
                'no_telp' => '081234567895',
                'create_date' => '15-01-2023',
            ],
            [
                'name' => 'Christopher',
                'email' => 'christopher@example.com',
                'no_telp' => '081234567896',
                'create_date' => '16-01-2023',
            ],
            [
                'name' => 'Maria',
                'email' => 'maria@example.com',
                'no_telp' => '081234567897',
                'create_date' => '17-01-2023',
            ],
            [
                'name' => 'Thomas',
                'email' => 'thomas@example.com',
                'no_telp' => '081234567898',
                'create_date' => '18-01-2023',
            ],
        ]
    ]);
});
