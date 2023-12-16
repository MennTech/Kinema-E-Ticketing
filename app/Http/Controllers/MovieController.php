<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Exception;
use Illuminate\Support\Facades\File; 

class MovieController extends Controller
{
    public function index(){
        $movie = Movie::all();
        return view('admin/movie/dataFilm', compact('movie'));
    }

    public function create(){
        return view('admin/movie/tambahFilm');
    }

    public function store(Request $request){
        $this->validate($request,[
            'judul_film'=>'required',
            'genre'=>'required',
            'durasi'=>'required',
            'status'=>'required',
            'ratingUsia'=>'required',
            'sutradara'=>'required',
            'actor'=>'required',
            'sinopsis'=>'required',
            'poster'=> 'image|required|mimes:jpeg,png,jpg',
        ]);

        if($request->file('poster')){
            $img = $request->file('poster');
            $imagesName = time().'.'.$img->extension();
            $img->move(public_path('poster_film'),$imagesName);
        } 

        $request->genre = implode(", ", $request->genre);

        Movie::create([
            'judul_film'=>$request->judul_film,
            'genre'=>$request->genre,
            'durasi'=>$request->durasi,
            'status'=>$request->status,
            'ratingUsia'=>$request->ratingUsia,
            'sutradara'=>$request->sutradara,
            'actor'=>$request->actor,
            'sinopsis'=>$request->sinopsis,
            'poster'=> $imagesName,
        ]);

        return redirect()->route('movie.index');
    }

    public function edit($id){
        $movie = Movie::find($id);
        return view('admin/movie/editFilm', compact('movie'));
    }

    public function update(Request $request, $id){
        $movie = Movie::find($id);
        $this->validate($request,[
            'judul_film'=>'required',
            'genre'=>'required',
            'durasi'=>'required',
            'status'=>'required',
            'ratingUsia'=>'required',
            'sutradara'=>'required',
            'actor'=>'required',
            'sinopsis'=>'required',
            'poster'=> 'image|mimes:jpeg,png,jpg',
        ]);

        if($request->file('poster')){
            $img = $request->file('poster');
            $imagesName = time().'.'.$img->extension();
            $img->move(public_path('poster_film'),$imagesName);
        } else{
            $imagesName = $movie->poster;
        }

        $movie->update([
            'judul_film'=>$request->judul_film,
            'genre'=>$request->genre,
            'durasi'=>$request->durasi,
            'status'=>$request->status,
            'ratingUsia'=>$request->ratingUsia,
            'sutradara'=>$request->sutradara,
            'actor'=>$request->actor,
            'sinopsis'=>$request->sinopsis,
            'poster'=> $imagesName,
        ]);

        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    public function destroy($id){
        $movie = Movie::find($id);
        File::delete(public_path('poster_film/'.$movie->poster));
        $movie->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
