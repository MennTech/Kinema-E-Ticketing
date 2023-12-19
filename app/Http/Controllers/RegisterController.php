<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\MainSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function actionRegister(Request $request){
        $this->validate($request, [
            'email'=>'required|email|unique:users',
            'username'=>'required|min:4',
            'password'=>'required|min:6',
            'no_telp'=>'required|regex:/^08[0-9]{11,13}$/'
        ]);

        $profile_picture = 'user2.jpg';

        $str = Str::random(100);
        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password), // Hash::make() untuk mengenkripsi password
            'verify_key' => $str,
            'role'=> 'user',
            'no_telp'=>$request->no_telp,
            'profile_picture' => $profile_picture
        ]);

        $details = [
            'username'=>$request->username,
            'website'=> 'Kinema',
            'datetime'=>date('Y-m-d H:i:s'),
            'url'=>request()->getHttpHost() . '/register/verify/' . $str
        ];

        Mail::to($request->email)->send(new MainSend($details));
        
        Session::flash('message', 'Link verifikasi telah dikirim ke email anda. Silahkan cek email anda untuk mengaktifkan akun.');
        return redirect('/register');
    }

    public function verify($verify_key){
        $keyCheck = User::select('verify_key')->where('verify_key', $verify_key)->exists();

        if($keyCheck){
            $user = User::where('verify_key', $verify_key)->update([
                'active'=>1,
                'email_verified_at'=>date('Y-m-d H:i:s'),
            ]);
            
            return "Verifikasi berhasil. Akun anda sudah aktif.";
        } else {
            return "Keys tidak valid.";
        }
    }
}
