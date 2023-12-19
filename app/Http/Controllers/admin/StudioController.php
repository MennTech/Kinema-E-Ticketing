<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    public function index(){
        $studio = Studio::all();
        return view('admin.studio.index', compact('studio'));
    }
    
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'seat' => 'required'
        ]);

        Studio::create([
            'name' => $request->name,
            'seat' => $request->seat
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'seat' => 'required'
        ]);

        $studio = Studio::find($id);
        $studio->update([
            'name' => $request->name,
            'seat' => $request->seat
        ]);

        return redirect()->back();
    }

    public function destroy($id){
        $studio = Studio::find($id);
        $studio->delete();

        return redirect()->back();
    }
}
