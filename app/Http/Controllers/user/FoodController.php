<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    public function index(){
        $foods = Food::where('status', 'Ready')->get();
        if(Auth::check()){
            if (Auth::user()->role == 'admin') {
                return redirect()->route('dashboard');
            } 
        }
        return view('user.pages.food', compact('foods'));
    }
}
