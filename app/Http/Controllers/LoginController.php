<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm(){
        return view('app.login-form');
    }

    public function login(Request $request){
        $vals = $request->validate([
            'email' => 'required|email|min:5',
            'password' => 'required|string|min:4',
        ]);

        if(!Auth::attempt($vals)){
            return back()->withErrors(['email' => 'Usuario o contraseña inválidos']);
        }

        session()->regenerate();
        return redirect()->route('home');
    }
}
