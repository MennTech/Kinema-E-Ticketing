<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Support\Facades\File; 

class FoodController extends Controller     
{
    public function index()
    {
        $food = Food::all();
        return view('admin.food.dataMakanan', compact('food'));
    }

    public function create()
    {
        return view('admin.food.tambahMakanan');
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama'=> 'required',
            'harga'=> 'required',
            'stok'=> 'required',
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
            'stok'=>$request->stok,
            'image'=> $imagesName,
        ]);

        return redirect()->route('food.index');
    }

    public function edit($id){
        $food = Food::find($id);
        return view('admin.food.editMakanan', compact('food'));
    }

    public function update(Request $request, $id){
        $food = Food::find($id);
        $this->validate($request,[
            'nama'=> 'required',
            'harga'=> 'required',
            'stok'=> 'required',
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
            'stok'=>$request->stok,
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