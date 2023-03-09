<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index() {
        return view('login.index');
    }

    public function login(Request $request) {
        $validasi = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($validasi)) {
            $request->session()->regenerate();
            if(auth()->user()->role === 'admin') {
                return redirect('/dashboard/index');
            }
            if(auth()->user()->role === 'catering') {
                return redirect('/dashboard/catering/home');
            }
            return redirect('/catering');
        }
        return back();
    }

    public function register() {
        return view('user.register.index');
    }
    public function registerCatering() {
        return view('catering.register.index');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->regenerateToken();
        $request->session()->invalidate();
        return redirect('/login');
    }
}
