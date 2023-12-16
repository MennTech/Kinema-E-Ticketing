<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class UserMovieController extends Controller
{
    public function index(){
        $movie = Movie::all();
        return view('user.pages.index', compact('movie'));
    }    
}
