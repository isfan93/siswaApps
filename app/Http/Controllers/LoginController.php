<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function loginProses(Request $request){
        $request->validate([
            'username'  => 'required',
            'password'  => 'required',
        ]);

        $data = [
            'username'  => $request->username,
            'password'  => $request->password,
        ];

        $user = User::where('username', $request->input('username'))->first();
    
       if(Auth::attempt($data)){
        return redirect()->route('dashboard')->with('success', 'Login Berhasil');
       } else {
        return redirect()->back()->with('error', 'Username atau Password salah');
       }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
