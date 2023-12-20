<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(){
        if(Auth::check()){
            if(Auth::user()->role == 'admin'){
                return redirect('/admin');
            } else {
                return redirect('/');
            }
        } else {
            return view('/');
        }
    }

    public function actionLogin(Request $request){
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if(Auth::attempt($data)){
            $user = Auth::user();
            if($user->role == 'admin'){
                return redirect()->route('dashboard');
            }
            if($user->active){
                return redirect()->route('home');
            } else {
                Auth::logout();
                Session::flash('error', 'Akun Anda Belum diverifikasi. Silahkan cek email Anda.');
                return redirect()->route('login');
            }
        } else {
            Session::flash('error', 'Email atau password salah');
            return redirect()->route('login');
        }
    }

    public function actionLogout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
