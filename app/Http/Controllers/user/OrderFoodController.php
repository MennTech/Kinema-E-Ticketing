<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderFood;


class OrderFoodController extends Controller
{
    public function store(Request $request){
        $order = OrderFood::create([
            'id_user' => $request->id_user,
            'food' => $request->food,
            'total' => $request->total
        ]);

        return redirect()->route('home');
    }
}
