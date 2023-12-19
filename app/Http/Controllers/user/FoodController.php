<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    public function index(){
        $foods = Food::where('status', 'Ready')->get();
        return view('user.pages.food', compact('foods'));
    }
}
