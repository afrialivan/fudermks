<?php

namespace App\Http\Controllers;

use App\Models\Catering;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index() {
        return view('guest.login.index');
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
                // $catering = Catering::where('id', auth()->user()->id);
                // if($catering == null) {
                //     dd('oi');
                // }
                return redirect('/dashboard/catering/home');
            }
            return redirect('/catering');
        }
        return back();
    }

    public function registerpelanggan() {
        return view('guest.register.pelanggan');
    }
    public function registercatering() {
        return view('guest.register.catering');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->regenerateToken();
        $request->session()->invalidate();
        return redirect('/login');
    }

    public function storeregistercatering(Request $request){
        $validated = $request->validate([
            "email" => ['required'],
            "tlp" => ['required'],
            "name" => ['required'],
            "nik" => ['required'],
            "tgl_lahir" => ['required'],
            "alamat" => ['required'],
            "ktp" => ['required'],
            "selfi_ktp" => ['required'],
            "namacatering" => ['required'],
            "deskripsi" => ['required'],
            "logo" => ['required'],
            "alamatcatering" => ['required'],
            "username" => ['required', 'unique:users'],
            "password" => ['required'],
            "confirmpassword" => ['required','same:password'],
        ]);

        $validated['password'] = bcrypt($validated['password']);
        $validated['status'] = 'belum';
        User::create($validated);

        return redirect('/login')->with('proses', 'Akun anda telah berhasil dibuat, silahkan hubungi admin untuk verifikasi');
    }
}
