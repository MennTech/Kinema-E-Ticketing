<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderFood;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderFoodController extends Controller
{

    public function index(){
        if(Auth::check()){
            if (Auth::user()->role == 'admin') {
                return redirect()->route('dashboard');
            } 
        }
        $foods = OrderFood::where('id_user', Auth::user()->id)->get();
        if($foods->count() <= 0){
            Session::flash('message', 'Anda Belum Membeli Makanan, Silahkan Beli Makanan Yang Tersedia.');
        }
        foreach($foods as $f){
            $f->food = json_decode($f->food, true);
        }
        return view('user.pages.myFood', compact('foods'));
    }

    public function store(Request $request){
        $order = OrderFood::create([
            'id_user' => $request->id_user,
            'food' => json_encode($request->food),
            'total' => $request->total
        ]);

        return redirect()->route('home');
    }
}
