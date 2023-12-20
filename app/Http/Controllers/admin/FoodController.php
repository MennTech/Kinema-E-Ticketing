<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller     
{
    public function index()
    {
        $food = Food::all();
        if (Auth::user()->role == 'admin') {
            return view('admin.food.dataMakanan', compact('food'));
        } else {
            return redirect()->route('home');
        }
    }

    public function create()
    {
        if (Auth::user()->role == 'admin') {
            return view('admin.food.tambahMakanan');
        } else {
            return redirect()->route('home');
        }
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama'=> 'required',
            'harga'=> 'required',
            'status'=> 'required',
            'image'=> 'image|required|mimes:jpeg,png,jpg',
        ]);

        if($request->file('image')){
            $img = $request->file('image');
            $imagesName = time().'.'.$img->extension();
            $img->move(public_path('image_food'),$imagesName);
        } 

        Food::create([
            'nama'=>$request->nama,
            'harga'=>$request->harga,
            'status'=>$request->status,
            'image'=> $imagesName,
        ]);

        return redirect()->route('food.index');
    }

    public function edit($id){
        $food = Food::find($id);
        if (Auth::user()->role == 'admin') {
            return view('admin.food.editMakanan', compact('food'));
        } else {
            return redirect()->route('home');
        }
    }

    public function update(Request $request, $id){
        $food = Food::find($id);
        $this->validate($request,[
            'nama'=> 'required',
            'harga'=> 'required',
            'status'=> 'required',
            'image'=> 'image|mimes:jpeg,png,jpg',
        ]);

        if($request->file('image')){
            $img = $request->file('image');
            $imagesName = time().'.'.$img->extension();
            $img->move(public_path('image_food'),$imagesName);
        } else {
            $imagesName = $food->image;
        }

        $food->update([
            'nama'=>$request->nama,
            'harga'=>$request->harga,
            'status'=>$request->status,
            'image'=> $imagesName,
        ]);
        return redirect()->route('food.index')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id){
        $food = Food::find($id);
        File::delete(public_path('image_food/'.$food->image));
        $food->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }
}
