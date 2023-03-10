<?php

namespace App\Http\Controllers;

use App\Models\Catering;
use App\Models\Keranjang;
use App\Models\Menu;
use Illuminate\Http\Request;

class cateringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.home', [
            'title' => 'Home'
        ]);
    }

    public function semuaCatering()
    {
        return view('user.catering', [
            'title' => 'Semua Catering',
            'caterings' => Catering::all()
        ]);
    }

    public function menuDetail(Catering $catering)
    {
        return view('user.catering.menudetail', [
            'title' => 'Detail Menu',
            'catering' => $catering,
            'menu' => Menu::where('id_catering', $catering->id)->get(),
            // dd(Menu::where('id_catering', $catering->id)->get())
        ]);
    }

    public function tambahCatering(Request $request, Menu $menu)
    {
        $validasi = $request->validate([
            'jumlah_menu' => 'required|integer'
        ]);
        $validasi['id_menu'] = $menu->id;
        $validasi['id_user'] = auth()->user()->id;
        $validasi['total'] = $menu->harga * $validasi['jumlah_menu'];
        // dd($menu->harga * $validasi['jumlah_menu']);

        Keranjang::create($validasi);

        return back()->with('keranjang', 'd-flex');
    }

    public function keranjang()
    {
        return view('user.keranjang', [
            'title'  => 'Keranjang',
            'keranjangs' => Keranjang::where('id_user', auth()->user()->id)->latest()->get()
        ]);
    }

    public function menu()
    {
        return view('user.menu', [
            'title'  => 'Menu'
        ]);
    }

    public function pesanan()
    {
        return view('user.pesanan.pesanan', [
            'title'  => 'Pesanan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Catering $catering)
    {
        return view('user.catering.index', [
            'title' => $catering->nama,
            'menus' => Menu::all(),
            'catering' => $catering,
            'menu' => Menu::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
