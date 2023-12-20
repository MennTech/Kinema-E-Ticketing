<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AboutController extends Controller
{
    public function index()
    {   
        if(Auth::check()){
            if (Auth::user()->role == 'admin') {
                return redirect()->route('dashboard');
            } 
        }
        return view('user\pages\about');
    }
}
