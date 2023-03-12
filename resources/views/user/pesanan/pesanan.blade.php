@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/pesanan.css') }}">
@endsection

@section('container')
    <main>

        <h2 class="text-center mt-3">Pesanan Anda</h2>

        <div class="nav-items d-flex justify-content-center">
            <div class="nav-item">
                <a href="/pesanan" class="text-decoration-none {{ $status == 'blm' ? 'text fw-bold' : 'text-dark' }}">BELUM
                    DIKONFIRMASI</a>
            </div>
            <div class="nav-item">
                <a href="/pesanan/pesanan-belum-bayar"
                    class="text-decoration-none  {{ $status == 'bayar' ? 'text fw-bold' : 'text-dark' }}">BELUM BAYAR</a>
            </div>
            <div class="nav-item">
                <a href="/pesanan/pesanan-proses"
                    class="text-decoration-none  {{ $status == 'proses' ? 'text fw-bold' : 'text-dark' }}">DIPROSES</a>
            </div>
            <div class="nav-item">
                <a href="/pesanan/pesanan-selesai"
                    class="text-decoration-none  {{ $status == 'selesai' ? 'text fw-bold' : 'text-dark' }}">SELESAI</a>
            </div>
        </div>
        <hr class="m-auto mt-2 mb-4">

        @if ($status == 'blm')
            @foreach ($pesanan as $item)
                <div class="kotak mb-5">
                    <div class="row align-items-center justify-content-between">
                        <div class="header-kotak d-flex justify-content-between align-items-center flex-wrap">
                            <h2 class="fw-bold mt-4">{{ $item->catering->nama }}</h2>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row kotak-item mt-3">
                        <div class="col-3">
                            <img src="http://source.unsplash.com/500x500?catering" class="item-gambar" alt="">
                        </div>
                        <div class="col-9">
                            <h3>{{ $item->menu->nama }}</h3>
                            <div class="rows d-flex justify-content-between align-items-center">
                                <p>Rp {{ $item->total }}</p>
                                <p class="bg-secondary px-2">{{ $item->jumlah_menu }}</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row mt-4 align-items-end mb-3">
                        <form action="">
                            <h3>Jadwal Pengantaran</h3>
                            <input type="datetime" name="" value="{{ $item->tgl_pengantaran }}" id=""
                                class="form-control date mb-3" disabled>
                        </form>
                    </div>
                    <table>
                        <tr>
                            <th>Harga Satuan</th>
                            <td>Rp</td>
                            <td>@money($item->menu->harga),-</td>
                        </tr>
                        <tr>
                            <th>Jumlah Pesanan</th>
                            <td></td>
                            <td>{{ $item->jumlah_menu }}</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <th>Total Harga</th>
                            <td>Rp</td>
                            <td>@money($item->total),-</td>
                        </tr>
                    </table>
                    <p class="text-end">Bayar Sebelum 31/01/2023 11:42 WITA</p>
                </div>
            @endforeach
        @endif

        @if ($status == 'bayar')
            @foreach ($pesanan as $item)
                <div class="kotak mb-5">
                    <div class="header-kotak d-flex justify-content-between align-items-center flex-wrap mb-3">
                        <h2 class="fw-bold mt-2">{{ $item->catering->nama }}</h2>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <h5>ID Pemesanan : IDN300123-1</h5>
                    <table class="mt-4">
                        <tr>
                            <th>Total Pemesanan</th>
                            <td>Rp</td>
                            <td>@money($item->total)</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <th>Total Biaya</th>
                            <td>Rp</td>
                            <td>@money($item->total)</td>
                        </tr>
                        <tr>
                            <th>DP 50%</th>
                            <td>Rp</td>
                            <td> 8.134.500,-</td>
                        </tr>
                    </table>

                    <p class="mt-3 textt">Silahkan transfer ke Nomor Rekening :
                        <strong>........................................</strong> a.n. PT. FUDER MAKANAN INDONESIA di BANK
                        BSI dengan
                        nominal Rp {{ $item->total }}
                    </p>
                    <p class="text-end">Bayar Sebelum 31/01/2023 11:42 WITA</p>
                </div>
            @endforeach
        @endif

        @if ($status == 'proses')
            @foreach ($pesanans as $pesanan)
                <div class="kotak mb-5">
                    <div class="header-kotak d-flex justify-content-between align-items-center flex-wrap">
                        <h2 class="fw-bold mt-2">{{ $pesanan->catering->nama }}</h2>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <h5>ID Pemesanan : IDN300123-1</h5>
                    <div class="d-flex justify-content-between flex-wrap mt-3">
                        <table class="mt-4 table-proses">
                            <tr>
                                <th>Total Pemesanan</th>
                                <td>Rp</td>
                                <td>@money($pesanan->total)</td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <th>Total Biaya</th>
                                <td>Rp</td>
                                <td>@money($pesanan->total),-</td>
                            </tr>
                            <tr>
                                <th>DP 50%</th>
                                <td>Rp</td>
                                <td> 8.134.500,-</td>
                            </tr>
                        </table>
                        <a href="" class="text-decoration-none text-dark mt-3">
                            <div class="kontak">
                                <img src="../img/wa.svg" alt="" class="d-block m-auto">
                                <p>Hubungi Catering</p>
                            </div>
                        </a>
                    </div>

                    <h4 class="text-end fw-bold mt-4">Jadwal Pengantaran</h4>
                    <div class="tgll d-flex justify-content-end">
                        <input type="datetime" class="form-control tanggal" value="{{ $pesanan->tgl_pengantaran }}" disabled>
                    </div>


                    <p class="mt-3 text">Pesananmu sedang diproses yaa, harap konfirmasi pesanan
                        setelah selesai. Jika pesananmu tidak diantarkan 1 Jam Sebelum
                        Jadwal Pengantaran. Silahkan Laporkan</p>

                    <form action="/pesanan/pesanan-proses/{{ $pesanan->id }}" method="POST">
                        @csrf
                        <div class="buttonn d-flex justify-content-between mb-5">
                            <a href="" class="btn btn-danger">Laporkan</a>
                            <button class="btn btnn">Konfirmasi
                                Pesanan Sampai</button>
                        </div>
                    </form>
                </div>
            @endforeach
        @endif

        @if ($status == 'selesai')
            @foreach ($pesanan as $item)
                <div class="kotak mb-5">
                    <div class="header-kotak d-flex justify-content-between align-items-center flex-wrap">
                        <h2 class="fw-bold mt-2">{{ $item->catering->nama }}</h2>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <h5 class="id-pesanan">ID Pemesanan : IDN300123-1</h5>
                    <table class="mt-4">
                        <tr>
                            <th>Total Pemesanan</th>
                            <td>Rp</td>
                            <td>@money($item->total),-</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <th>Total Biaya</th>
                            <td>Rp</td>
                            <td>@money($item->total)</td>
                        </tr>
                    </table>
                </div>
            @endforeach
        @endif
        <!-- -------------- -->
    </main>
@endsection
