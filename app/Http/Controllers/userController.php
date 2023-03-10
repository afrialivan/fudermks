<?php

namespace App\Http\Controllers;

use App\Models\Catering;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index()
    {
        return view('guest.login.index');
    }

    public function login(Request $request)
    {
        $validasi = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($validasi)) {
            $request->session()->regenerate();
            if (auth()->user()->role === 'admin') {
                return redirect('/dashboard');
            }
            if (auth()->user()->role === 'catering') {
                return redirect('/dashboard');
            }
            return redirect('/catering');
        }
        return back();
    }

    public function registerpelanggan()
    {
        return view('guest.register.pelanggan');
    }
    public function registercatering()
    {
        return view('guest.register.catering');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerateToken();
        $request->session()->invalidate();
        return redirect('/login');
    }

    public function storeregistercatering(Request $request)
    {
        $validateduser = $request->validate(
            [
                "email" => 'required',
                "tlp" => 'required',
                "name" => 'required',
                "nik" => 'required',
                "tgl_lahir" => 'required',
                "alamat" => 'required',
                "username" => 'required', 'unique:users',
                "password" => 'required',
                "confirmpassword" => 'required', 'same:password',
                "ktp" => 'required',
                "selfi_ktp" => 'required',
                "namacatering" => 'required',
                "deskripsi" => 'required',
                "logo" => 'required',
                "alamatcatering" => 'required',
                // "slug" => 'required',
            ],
            // [
            //     'tlp.required' => 'telepon harus di isi'
            // ]
        );

        User::create($validateduser);
        $user = User::where('name', $request->name)->get();
        Catering::create([
            "ktp" => $request->ktp,
            "selfi_ktp" => $request->selfi_ktp,
            "nama" => $request->namacatering,
            "deskripsi" => $request->deskripsi,
            "logo" => $request->logo,
            "alamat" => $request->alamatcatering,
            "slug" => $request->slug,
            "id_user" => $user[0]->id,
        ]);

        return redirect('/login')->with('proses', 'Akun anda telah berhasil dibuat, silahkan hubungi admin untuk verifikasi');
    }

    public function profil()
    {
        return view('user.profil.index', [
            'title' => 'Profil',
            'user' => User::where('id', auth()->user()->id)->get(),
        ]);
    }
}
