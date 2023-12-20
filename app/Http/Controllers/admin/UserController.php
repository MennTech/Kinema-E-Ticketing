<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\OrderTicket;
use App\Models\OrderFood;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function index(){
        $user = User::where('role', 'user')->get();
        $jumlahTiket = OrderTicket::count();
        $jumlahMakanan = OrderFood::count();
        $totalPendapatanTiket = OrderTicket::sum('total_price'); 
        $totalPendapatanMakanan = OrderFood::sum('total');
        return view('admin.landingPage', compact('user', 'jumlahTiket', 'jumlahMakanan', 'totalPendapatanTiket', 'totalPendapatanMakanan'));
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
