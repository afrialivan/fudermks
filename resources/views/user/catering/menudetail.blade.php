@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/pilihan-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidenav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
@endsection

@section('container')
    <main>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Catering Pratama</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Menu Lain</a></li>
                <li class="breadcrumb-item text-dark active" aria-current="page">Tumpeng Besar - A</li>
            </ol>
            <!-- <hr> -->
        </nav>
        <div class="row">
            <div class="col-lg-5"><img src="{{ asset($menu[0]->foto) }}" alt="" class="gambar"></div>
            <div class="col-lg-7">
                {{-- @dd($menu) --}}
                <h1 class="mt-3">{{ $menu[0]->nama }}</h1>
                <p class="mb-4 h4">Rp {{ $menu[0]->harga }}</p>
                <hr>
                <form action="/tambah-keranjang/{{ $menu[0]->id }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="tombol-jumlah d-flex justify-content-around">
                                <button type="button" class="btn" id="keranjangKurang">-</button>
                                <input type="number" name="jumlah_menu" id="jumlah" value="0">
                                <button type="button" class="btn" id="keranjangTambah">+</button>
                            </div>
                        </div>
                        <div class="col-6">
                            <p><span class="fw-bold">Category :</span> Tumpeng</p>
                            <p><span class="fw-bold">Share :</span>
                                <img src="../../../img/wa.svg" alt="">
                                <img src="../../../img/fb.svg" alt="">
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 tombol">
                            <button class="btn text-light" id="tambahKeranjang" type="submit">Tambahkan di
                                Keranjang</button>
                        </div>
                        <div class="col-6 tombol">
                            <a class="btn text-light" href="bandingkan.html">Bandingan Menu</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr>

        <h3>Deskripsi Produk</h3>
        <p class="fw mb-4">Nasi Kuning, Ayam Goreng/Bakar/Bakar Bumbu Rujak, Sambal Trasi, Perkedel , Telor Asin, Kering
            Kentang, Sambal Goreng Kentang Ati, Mie Goreng, Sempol, Udang Penyet, Sate Lilit, Bronies Coklat 30 cm</p>
        <h3>Kisaran Porsi</h3>
        <p class="fw mb-4">15 - 20 Orang</p>
        <h3>Pengemasan</h3>
        <p class="fw mb-4">Triplek Kotak 100 x 70, Piring, Sendok, Centong Kayu BM, Tisue, Cobek Batu Kecil + Uleg</p>
        <h3>Catatan Lainnya</h3>
        <p class="fw mb-4">Pembelian 10 gratis 1</p>

        @if (session()->has('keranjang'))
            <div class="{{ session('keranjang') }} notiff justify-content-center align-items-center">
                <div class="notif d-flex flex-column justify-content-center align-items-center">
                    <p class="h3">Pesanan Kamu sudah masuk di keranjang</p>
                    <a href="/keranjang" class="btn" id="notif-submit">Oke!</a>
                </div>
            </div>
        @endif
    </main>
@endsection

@section('js')
    <script src="../../../js/menu-detail.js"></script>
@endsection
