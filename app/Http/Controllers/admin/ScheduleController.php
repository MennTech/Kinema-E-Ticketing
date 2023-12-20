<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Movie;
use App\Models\Studio;

class ScheduleController extends Controller
{
    public function index(){
        $movies = Movie::where('status', 'Now Playing')->get();
        $studios = Studio::all();
        $schedule = Schedule::with(['movie','studio'])->get();
        return view('admin.schedule.index', compact('schedule', 'movies', 'studios'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'id_movie' => 'required',
            'id_studio' => 'required',
            'date' => 'required',
            'time' => 'required'
        ]);

        Schedule::create([
            'id_movie' => $request->id_movie,
            'id_studio' => $request->id_studio,
            'date' => $request->date,
            'time' => $request->time
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'id_movie' => 'required',
            'id_studio' => 'required',
            'date' => 'required',
            'time' => 'required'
        ]);

        $schedule = Schedule::find($id);
        $schedule->update([
            'id_movie' => $request->id_movie,
            'id_studio' => $request->id_studio,
            'date' => $request->date,
            'time' => $request->time
        ]);

        return redirect()->back();
    }

    public function destroy($id){
        $schedule = Schedule::find($id);
        $schedule->delete();

        return redirect()->back();
    }
}
