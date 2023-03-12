@extends('layouts.dashboard.main')

@section('container')
    <section class="table-components">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title mb-30">
                            <h2>Belum Konfirmasi Pesanan</h2>
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
                                    @if (session()->has('hapusPesananSuccess'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ session('hapusPesananSuccess') }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
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
                                            <th class="col-2">
                                                <h6>Action</h6>
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
                                                <td>
                                                    <div class="action">
                                                        <button class="text-primary fs-4" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            {{-- Modal --}}
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi
                                                                Pesanan</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <form action="/dashboard/pesanan/belumkonfir/{{ $pesanan->id }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="recipient-name" class="col-form-label">Total
                                                                        Harga:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="recipient-name" name="total"
                                                                        value="{{ $pesanan->total }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">Tanggal Pengantaran:</label>
                                                                    <input type="date" class="form-control"
                                                                        id="recipient-name" name="tgl_pengantaran"
                                                                        value="{{ $pesanan->tgl_pengantaran }}">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <a href="/dashboard/pesanan/hapus/{{ $pesanan->id }}" class="btn btn-danger">Batalkan</a>
                                                                <button type="submit" class="btn btn-primary">Konfirmasi</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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
