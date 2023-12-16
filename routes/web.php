<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\admin\MovieController;
use App\Http\Controllers\admin\FoodController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\UserMovieController;
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

Route::get('/', [UserMovieController::class, 'index']);

Route::get('/detail', function(){
    return view('user/pages/detail', [
        'foto_profile' => 'admin2.jpg',
        'name' => 'Trisna Utama',
        'table_film' => [
            'poster_film' => 'poster-film1.jpeg',
            'judul_film' => 'Avengers: Endgame',
            'genre' => 'Action, Adventure, Drama',
            'durasi' => '181',
            'status' => 'Now Playing',
            'ratingUsia' => '13',
            'sinopsis' => 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins.',
            'sutradara' => 'Anthony Russo, Joe Russo',
            'actor' => 'Robert Downey Jr., Chris Evans, Mark Ruffalo',
        ],
        'jadwal'=>[
            'tanggal' => date('d-F-Y'),
            'jam' => [
                '09:15',
                '12:45',
                '15:30',
                '19:15',
            ],
            'harga' => '35000',
        ]
    ]);
});

Route::get('/seat', function(){
    return view('user/pages/seat', [
        'foto_profile' => 'admin2.jpg',
    ]);
});

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
});

Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
//end Login

//Register
Route::get('/register', function () {
    return view('auth/register');
});
Route::post('register/action', [RegisterController::class, 'actionRegister'])->name('actionRegister');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');
//End Register

//Logout
Route::get('logout', [LoginController::class, 'actionLogout'])->name('actionLogout')->middleware('auth');
//End Logout

Route::get('/admin/dashboard', [UserController::class, 'index'])->name('dashboard');
Route::delete('/admin/dashboard/{id}', [UserController::class, 'destroy'])->name('user.destroy');

Route::resource('/admin/movie', MovieController::class);

Route::resource('/admin/food', FoodController::class);

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