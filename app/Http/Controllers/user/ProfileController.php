<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
class ProfileController extends Controller
{

    public function index(){
        if(Auth::check()){
            if (Auth::user()->role == 'admin') {
                return redirect()->route('dashboard');
            } 
        }
        $user = User::where('id', Auth::user()->id)->first();
        return view('user.pages.profile', compact('user'));
    }
    public function update(Request $request){
        $user = User::find(Auth::user()->id);
        $this->validate($request, [
            'username' => 'required',
            'no_telp' => 'required',
        ]);
        $user->update([
            'username' => $request->username,
            'no_telp' => $request->no_telp,
        ]);

        return redirect()->route('profile');
    }

    public function updateProfileImage(Request $request){
        $user = User::find(Auth::user()->id);
        $this->validate($request, [
            'profile_picture' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);
        $file = $request->file('profile_picture');
        if($user->profile_picture != null){
            File::delete('avatar/' . $user->profile_picture);
        }
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('avatar', $fileName);
        $user->update([
            'profile_picture' => $fileName
        ]);

        return redirect()->route('profile');
    }
}
