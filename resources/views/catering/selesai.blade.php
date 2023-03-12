@extends('layouts.dashboard.main')

@section('container')
    <section class="table-components">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title mb-30">
                            <h2>Pesanan Selesai</h2>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6">
                        <div class="breadcrumb-wrapper mb-30">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#0">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Menu
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->
            <!-- ========== tables-wrapper start ========== -->
            <div class="tables-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-style mb-30">
                            <div class="table-wrapper table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="col-2">
                                                <h6>Nama Pembeli</h6>
                                            </th>
                                            <th class="col-2">
                                                <h6>Nama Menu</h6>
                                            </th>
                                            <th class="col-2">
                                                <h6>Jumlah Pemesanan</h6>
                                            </th>
                                            <th class="col-2">
                                                <h6>Tanggal Pengantaran</h6>
                                            </th>
                                            <th class="col-2">
                                                <h6>Total Harga</h6>
                                            </th>
                                        </tr>
                                        <!-- end table row-->
                                    </thead>
                                    <tbody>
                                        @foreach ($pesanans as $pesanan)
                                            <tr>
                                                <td class="min-width">
                                                    <div class="lead">
                                                        <div class="lead-text">
                                                            <p>{{ $pesanan->user->name }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="min-width">
                                                    <p><a href="#0">{{ $pesanan->menu->nama }}</a></p>
                                                </td>
                                                <td class="min-width">
                                                    <p>{{ $pesanan->jumlah_menu }}</p>
                                                </td>
                                                <td class="min-width">
                                                    <p>{{ $pesanan->tgl_pengantaran }}</p>
                                                </td>
                                                <td class="min-width">
                                                    <p>{{ $pesanan->total }}</p>
                                                </td>
                                            </tr>

                                        @endforeach
                                        <!-- end table row -->
                                    </tbody>
                                </table>
                                <!-- end table -->
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== tables-wrapper end ========== -->
        </div>
        <!-- end container -->
    </section>
@endsection
