<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\admin\MovieController as adminMovie;
use App\Http\Controllers\admin\FoodController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\user\MovieController as userMovie;
use App\Http\Controllers\user\OrderTicketController;

Route::middleware('auth')->group(function(){
    Route::get('logout', [LoginController::class, 'actionLogout'])->name('actionLogout');

    Route::get('/admin/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::delete('/admin/dashboard/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::resource('/admin/movie', adminMovie::class);
    Route::resource('/admin/food', FoodController::class);

    Route::get('/choose_seat/{id}', [OrderTicketController::class, 'choose_seat'])->name('choose_seat');
    Route::post('/order_ticket', [OrderTicketController::class, 'order_ticket'])->name('order_ticket');
});

Route::get('/', [userMovie::class, 'index'])->name('home');
Route::get('/detail/{id}', [userMovie::class, 'detailMovie'])->name('detailMovie');

Route::get('/food', function(){
    return view('user/pages/food', [
        'foto_profile' => 'admin2.jpg',
        'name' => 'Trisna Utama',
        'total_harga' => '0',
        'table_food'=>[
            [
                'id' => '1',
                'gambar' => 'makanan1.jpg',
                'nama' => 'Popcorn',
                'harga' => '20000',
                'jumlah'=>'0'
            ],
            [
                'id' => '2',
                'gambar' => 'makanan1.jpg',
                'nama' => 'Popcorn',
                'harga' => '25000',
                'jumlah'=>'0'
            ],
            [
                'id' => '3',
                'gambar' => 'makanan1.jpg',
                'nama' => 'Popcorn',
                'harga' => '30000',
                'jumlah'=>'0'
            ],
            [
                'id' => '4',
                'gambar' => 'makanan1.jpg',
                'nama' => 'Popcorn',
                'harga' => '40000',
                'jumlah'=>'0'
            ],
        ]
    ]);
});

//Login
Route::get('/login', function () {
    return view('auth/login');
})->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
//end Login

//Register
Route::get('/register', function () {
    return view('auth/register');
});
Route::post('register/action', [RegisterController::class, 'actionRegister'])->name('actionRegister');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');
//End Register

Route::get('/Profile', function () {
    return view('user/pages/profile',[
        'title' => 'profile',
        'foto_profile' => 'admin2.jpg',
        'name' => 'Trisna Utama',
        'email' => 'trisna@gmail.com',
        'no_telp' => '081234567891',
    ]);
});

Route::get('/Profile-MyTicket', function () {
    return view('user/pages/myTicket',[
        'title' => 'profile-myTicket',
        'foto_profile' => 'admin2.jpg', 
        'name' => 'Trisna Utama', 
    ]);
});

Route::get('/Profile-MyFood', function () {
    return view('user/pages/myFood',[
        'title' => 'profile-myFood',
        'foto_profile' => 'admin2.jpg', 
        'name' => 'Trisna Utama',
    ]);
});