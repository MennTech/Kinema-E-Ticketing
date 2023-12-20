<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Schedule;

class MovieController extends Controller
{
    public function index(){
        $movie = Movie::all();
        return view('user.pages.index', compact('movie'));
    }  

    public function detailMovie($id){
        $movie = Movie::find($id);
        $schedule = Schedule::where('id_movie', $id)->where('date', date('Y-m-d'))->first();
        $time = Schedule::where('id_movie', $id)->where('date', date('Y-m-d'))->get();
        return view('user.pages.detail.detail_movie', compact('movie', 'schedule', 'time'));
    }
}
