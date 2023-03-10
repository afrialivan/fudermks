<?php

namespace App\Http\Controllers;

use App\Models\Catering;
use App\Models\Item;
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
         return view('catering.menu');
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
            'items' => Item::where('id_user', auth()->user()->id)->get(),
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
