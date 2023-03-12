@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/pesanan.css">
@endsection

@section('container')
    <main>

        <h2 class="text-center mt-3">Pesanan Anda</h2>

        <div class="nav-pesanan d-flex justify-content-between m-auto mt-3">
            <div class="nav-items d-flex">
                <div class="nav-item">
                    <a href="pesanan-belum-bayar.html" class="text-decoration-none text-dark">BELUM BAYAR</a>
                </div>
                <div class="nav-item">
                    <a href="pesanan-proses.html" class="text-decoration-none">DIPROSES</a>
                </div>
            </div>
            <div class="nav-items d-flex">
                <div class="nav-item">
                    <a href="pesanan-selesai.html" class="text-decoration-none">SELESAI</a>
                </div>
                <div class="nav-item">
                    <a href="#" class="text-decoration-none">DIBATALKAN</a>
                </div>
            </div>
        </div>
        <hr class="m-auto mt-2 mb-4">



        @foreach ($pesanan as $item)
            <div class="kotak mb-5">
                <div class="row align-items-center justify-content-between">
                    <div class="header-kotak d-flex justify-content-between align-items-center flex-wrap">
                        <h2 class="fw-bold mt-4">Catering Pratama</h2>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="row kotak-item mt-3">
                    <div class="col-3">
                        <img src="../img/gambar1.png" class="item-gambar" alt="">
                    </div>
                    <div class="col-9">
                        <h3>Tumpeng Besar - A</h3>
                        <div class="rows d-flex justify-content-between align-items-center">
                            <p>Rp. 19.289.000</p>
                            <p class="bg-secondary px-2">1</p>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="row mt-4 align-items-end mb-3">
                    <form action="">
                        <h3>Jadwal Pengantaran</h3>
                        <input type="datetime-local" name="" id="" class="form-control date mb-3" disabled>
                    </form>
                </div>
                <table>
                    <tr>
                        <th>Total Pemesanan</th>
                        <td>Rp</td>
                        <td>19.289.000,-</td>
                    </tr>
                    <tr>
                        <th>Biaya Pengantaran</th>
                        <td>Rp</td>
                        <td>80.000,-</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <th>Total Biaya</th>
                        <td>Rp</td>
                        <td>19.369.000,-</td>
                    </tr>
                </table>
                <div class="buttons d-flex justify-content-center mt-4 mb-5">
                    <a href="pesanan-pembayaran.html" class="btn btnn text-light">Bayar DP</a>
                    <a href="pesanan-pembayaran.html" class="btn btnn text-light">Bayar Full</a>
                </div>
                <p class="text-end">Bayar Sebelum 31/01/2023 11:42 WITA</p>
            </div>
        @endforeach

        <!-- -------------- -->
    </main>
@endsection
