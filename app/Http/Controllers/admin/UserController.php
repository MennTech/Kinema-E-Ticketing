<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $user = User::where('role', 'user')->get();
        return view('admin.landingPage', compact('user'));
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
