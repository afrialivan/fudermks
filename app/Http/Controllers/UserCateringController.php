<?php

namespace App\Http\Controllers;

use App\Models\Catering;
use App\Models\Item;
use App\Models\Kategori;
use App\Models\Menu;
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
        return view('catering.blmkonfir');
    }

    public function blm_bayar_view()
    {
        return view('catering.blmbayar');
    }

    public function proses_view()
    {
        return view('catering.proses');
    }

    public function selesai_view()
    {
        return view('catering.selesai');
    }

    public function menu()
    {
        return view('catering.menu.index', [
            // 'items' => Item::where('id_user', auth()->user()->id)->get(),
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
    public function destroy(Catering $catering)
    {
        //
    }
}
