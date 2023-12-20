<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\admin\MovieController as adminMovie;
use App\Http\Controllers\admin\FoodController as adminFood;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\StudioController;
use App\Http\Controllers\admin\ScheduleController;
use App\Http\Controllers\user\MovieController as userMovie;
use App\Http\Controllers\user\OrderTicketController;
use App\Http\Controllers\user\FoodController as userFood; 
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\OrderFoodController;
use App\Http\Controllers\user\AboutController;

Route::middleware('auth')->group(function(){
    Route::get('logout', [LoginController::class, 'actionLogout'])->name('actionLogout');

    Route::get('/admin/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::delete('/admin/dashboard/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::resource('/admin/movie', adminMovie::class);
    Route::resource('/admin/food', adminFood::class);
    Route::resource('/admin/studio', StudioController::class);
    Route::resource('/admin/schedule', ScheduleController::class);

    Route::get('/choose_seat/{id}', [OrderTicketController::class, 'choose_seat'])->name('choose_seat');
    Route::post('/order_ticket', [OrderTicketController::class, 'order_ticket'])->name('order_ticket');
    Route::get('/my_ticket', [OrderTicketController::class, 'index'])->name('my_ticket');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/updateProfileImage', [ProfileController::class, 'updateProfileImage'])->name('profile.updateProfileImage');
    Route::post('/order_food', [OrderFoodController::class, 'store'])->name('order_food');
    Route::get('/my_food', [OrderFoodController::class, 'index'])->name('my_food');
});

Route::get('/', [userMovie::class, 'index'])->name('home');
Route::get('/detail/{id}', [userMovie::class, 'detailMovie'])->name('detailMovie');
Route::get('/food', [userFood::class, 'index'])->name('food');
Route::get('/about', [AboutController::class, 'index'])->name('about');

//Login
Route::get('/login', function () {
    return view('auth/login');
})->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');

//Register
Route::get('/register', function () {
    return view('auth/register');
});
Route::post('register/action', [RegisterController::class, 'actionRegister'])->name('actionRegister');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');