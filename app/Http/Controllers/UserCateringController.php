<?php

namespace App\Http\Controllers;

use App\Models\Catering;
use App\Models\Item;
use App\Models\Kategori;
use App\Models\Menu;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class UserCateringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('catering.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function menu_view()
    {
        return view('catering.menu.index', [
            'menus' => Menu::where('id_catering', session('dataCatering')->id)->get(),
        ]);
    }
    public function menu_tambah()
    {
        return view('catering.menu.tambah', [
            'kategori' => Kategori::where('id_catering', session('dataCatering')->id)->get()
        ]);
    }
    public function menu_tambah_store(Request $request)
    {
        // dd($request);
        $validate = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'isi_menu' => 'required',
            'foto' => 'required',
            'id_categori' => 'required',
            'deskripsi' => 'required',
            'kisaran_porsi' => 'required',
        'pengemasan' => 'required',
            'slug' => 'required',
        ]);

        $validate['id_catering'] = session('dataCatering')->id;

        if ($request->catatan_lainnya) {
            $validate['catatan_lainnya'] = $request->catatan_lainnya;
        }

        $foto = $request->file('foto');
        $validate['foto'] = 'img/' . $foto->hashName();
        $foto->storeAs('public/img/', $foto->hashName());

        // dd($validate);

        Menu::create($validate);

        return redirect('/dashboard/menu');
    }

    public function kategori_view()
    {
        return view('catering.kategori');
    }

    public function blm_konfir_view()
    {
        return view('catering.blmkonfir', [
            'pesanans' => Pesanan::where('id_catering', session('dataCatering')->id)->where('status', 'Belum Konfirmasi')->get()
        ]);
    }
    public function blm_konfir_store(Request $request, Pesanan $pesanan)
    {
        $validasi = $request->validate([
            'total' => 'required',
            'tgl_pengantaran' => 'required',
        ]);

        $validasi['id_catering'] = $pesanan->id_catering;
        $validasi['id_user'] = $pesanan->id_user;
        $validasi['id_menu'] = $pesanan->id_menu;
        $validasi['jumlah_menu'] = $pesanan->jumlah_menu;
        $validasi['status'] = 'Belum Bayar';

        Pesanan::where('id', $pesanan->id)->update($validasi);

        return redirect('/dashboard/pesanan/belumbayar');
    }

    public function blm_bayar_view()
    {
        return view('catering.blmbayar', [
            'pesanans' => Pesanan::where('id_catering', session('dataCatering')->id)->where('status', 'Belum Bayar')->get()
        ]);
    }
    public function blm_bayar_store(Request $request, Pesanan $pesanan)
    {
        // dd($pesanan);

        Pesanan::where('id', $pesanan->id)->update([
            'total' => $pesanan->total,
            'tgl_pengantaran' => $pesanan->tgl_pengantaran,
            'id_catering' => $pesanan->id_catering,
            'id_user' => $pesanan->id_user,
            'id_menu' => $pesanan->id_menu,
            'jumlah_menu' => $pesanan->jumlah_menu,
            'status' => 'Proses',
        ]);

        return redirect('/dashboard/pesanan/proses');
    }

    public function proses_view()
    {
        return view('catering.proses', [
            'pesanans' => Pesanan::where('id_catering', session('dataCatering')->id)->where('status', 'Proses')->get()
        ]);
    }
    public function proses_store(Request $request, Pesanan $pesanan)
    {
        Pesanan::where('id', $pesanan->id)->update([
            'total' => $pesanan->total,
            'tgl_pengantaran' => $pesanan->tgl_pengantaran,
            'id_catering' => $pesanan->id_catering,
            'id_user' => $pesanan->id_user,
            'id_menu' => $pesanan->id_menu,
            'jumlah_menu' => $pesanan->jumlah_menu,
            'status' => 'Selesai',
        ]);

        return redirect('/dashboard/pesanan/selesai');
    }

    public function selesai_view()
    {
        return view('catering.selesai', [
            'pesanans' => Pesanan::where('id_catering', session('dataCatering')->id)->where('status', 'Selesai')->get()
        ]);
    }

    public function menu()
    {
        return view('catering.menu.index', [
        ]);
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catering  $catering
     * @return \Illuminate\Http\Response
     */
    public function show(Catering $catering)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catering  $catering
     * @return \Illuminate\Http\Response
     */
    public function edit(Catering $catering)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catering  $catering
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catering $catering)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catering  $catering
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesanan $pesanan)
    {
        Pesanan::destroy($pesanan->id);
        return back()->with('hapusPesananSuccess', 'Pesanan telah dibatalkan');
    }
}
