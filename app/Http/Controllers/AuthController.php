<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function verify(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(!Auth::attempt($credentials)){
            return redirect()->back()->with('loginError', 'Invalid credentials');
        }
        $request->session()->regenerate();
        return redirect('/');
    }

    public function register(){
        return view('auth.register');
    }

    public function store(Request $request){
        $userDetails = $request->validate([
            'firstName' => ['required','max:50'],
            'lastName' => ['required', 'max:50'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed',Password::min(6)]
        ]);

        $user = User::create($userDetails);
        Auth::login($user);
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
