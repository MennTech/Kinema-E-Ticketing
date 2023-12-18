<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\OrderTicket;

class OrderTicketController extends Controller
{
    public function choose_seat($id){
        $schedule = Schedule::with('studio')->find($id);
        $seat = OrderTicket::where('id_schedule', $id)->get();
        $maxSeat = $schedule->studio->seat;
        $seatCheck = [];
        if($seat->count() > 0){
            foreach($seat as $item){
                $temp = explode(',', $item->seat);
                $seatCheck = array_merge($seatCheck, $temp);
            }
        }
        if(count($seatCheck) == $maxSeat){
            return redirect()->back()->with('error', 'Semua kursi sudah terisi');
        }
        return view('user.pages.detail.choose_seat', compact('schedule', 'seatCheck'));
    }

    public function order_ticket(Request $request){
        try{
            $data = $request->all();
            $data['seat'] = implode(',', $data['seat']);
            OrderTicket::create($data);
            return response()->json([
                'message' => 'success'
            ], 200);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'failed'
            ], 500);
        }
    }
}
