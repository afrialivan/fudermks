@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/keranjang.css">
@endsection

@section('container')
    <main>

        <!-- belum proses -->
        <h2 class="mt-5">Belum Proses</h2>
        <!-- <h4>Tidak ada yang perlu diproses</h4> -->

        @foreach ($keranjangs as $keranjang)
            <div class="kotak mb-4">
                <h2 class="fw-bold mt-2">Catering Pratama</h2>
                <div class="row kotak-item">
                    <div class="col-3">
                        <img src="img/gambar1.png" class="item-gambar" alt="">
                    </div>
                    <div class="col-9">
                        {{-- @dd($keranjang->menu) --}}
                        <h3>{{ $keranjang->menu->nama }}</h3>
                        <div class="rows d-flex justify-content-between align-items-center flex-wrap">
                            <p class="harga">Rp {{ $keranjang->total }}</p>
                            <div class="tombol-jumlah d-flex justify-content-around">
                                <button class="btn keranjangKurang">-</button>
                                <input type="number" name="jumlah_menu jumlah" value="{{ $keranjang->jumlah_menu }}">
                                <button class="btn keranjangTambah">+</button>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="proses-btn d-flex justify-content-end mt-4 mb-3">
                    <a class="btn">Proses</a>
                </div>
            </div>
        @endforeach

        <!-- -------------- -->
        <!-- belum bayar -->

        <h2 class="mt-5 mb-3">Belum Konfirmasi Pesanan</h2>
        <!-- <h4>Tidak ada yang perlu konfirmasi biaya pengiriman</h4> -->

        <div class="kotak mb-5">
            <h2 class="fw-bold mt-2">Catering Pratama</h2>
            <div class="row kotak-item">
                <div class="col-3">
                    <img src="img/gambar1.png" class="item-gambar" alt="">
                </div>
                <div class="col-9 col-">
                    <h3>Tumpeng Besar - A</h3>
                    <div class="rows d-flex justify-content-between align-items-center">
                        <p>Rp. 19.289.000</p>
                        <p class="bg-secondary px-2">1</p>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="row mt-4 align-items-end mb-3">
                <div class="col-lg-5 col-sm-12">
                    <form action="">
                        <h3>Jadwal Pengantaran</h3>
                        <input type="datetime-local" name="" id="" class="form-control mb-3">
                        <h3>Biaya Pengantaran</h3>
                        <input type="text" class="form-control" disabled value="Rp -">
                    </form>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <a href="" class="text-decoration-none text-dark kontaks mt-4">
                        <div class="kontak">
                            <img src="img/wa.svg" alt="" class="d-block m-auto">
                            <p>Hubungi Catering</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="pengantaran-btn d-flex justify-content-end mt-4 mb-3">
                        <a class="btn" id="pengataran">Konfirmasi Pengantaran</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="notiff justify-content-center align-items-center">
            <div class="notif d-flex flex-column align-items-center">
                <p class="h3">Silahkan Periksa Pesananmu di
                    Bagian Pesanan</p>
                <a href="/pesanan" class="btn">Oke!</a>
            </div>
        </div>
        <!-- -------------- -->
    </main>
@endsection

@section('js')
    <script src="js/keranjang.js"></script>
@endsection
