<?php

namespace App\Http\Controllers;

use App\Models\Catering;
use App\Models\Menu;
use App\Models\Pesanan;
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
        ]);
    }

    public function tambahCatering(Request $request, Menu $menu)
    {
        $validasi = $request->validate([
            'jumlah_menu' => 'required|integer',
            'tgl_pengantaran' => 'required',
            'id_catering' => 'required'
        ]);
        $validasi['id_menu'] = $menu->id;
        $validasi['id_user'] = auth()->user()->id;
        $validasi['total'] = $menu->harga * $validasi['jumlah_menu'];

        Pesanan::create($validasi);

        return back()->with('keranjang', 'd-flex');
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
            'title'  => 'Pesanan',
            'status'  => 'blm',
            'pesanan' => Pesanan::where('id_user', auth()->user()->id)->where('status', 'Belum Konfirmasi')->latest()->get()
        ]);
    }

    public function pesananBayar()
    {
        return view('user.pesanan.pesanan', [
            'title'  => 'Pesanan',
            'status'  => 'bayar',
            'pesanan' => Pesanan::where('id_user', auth()->user()->id)->where('status', 'Belum Bayar')->latest()->get()
        ]);
    }

    public function pesananProses()
    {
        return view('user.pesanan.pesanan', [
            'title'  => 'Pesanan',
            'status'  => 'proses',
            'pesanans' => Pesanan::where('id_user', auth()->user()->id)->where('status', 'Proses')->latest()->get()
        ]);
    }
    public function pesananSelesai()
    {
        return view('user.pesanan.pesanan', [
            'title'  => 'Pesanan',
            'status'  => 'selesai',
            'pesanan' => Pesanan::where('id_user', auth()->user()->id)->where('status', 'Selesai')->latest()->get()
        ]);
    }

    public function selesai(Pesanan $pesanan)
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

        return redirect('/pesanan/pesanan-selesai');
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
