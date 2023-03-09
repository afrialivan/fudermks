@extends('layouts.catering')

@section('container')
    <!-- ========== section start ========== -->
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title mb-30">
                            <h2>Fuder Dashboard</h2>
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
                                        Dashboard
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
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon purple">
                            S
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Jumlah Menu</h6>
                            <h3 class="text-bold mb-10">100</h3>
                            {{-- <p class="text-sm text-success">
                  <i class="lni lni-arrow-up"></i> +2.00%
                  <span class="text-gray">(30 days)</span>
                </p> --}}
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon success">
                            H
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Jumlah Keranjang</h6>
                            <h3 class="text-bold mb-10">100</h3>
                            {{-- <p class="text-sm text-success">
                  <i class="lni lni-arrow-up"></i> +5.45%
                  <span class="text-gray">Increased</span>
                </p> --}}
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon primary">
                            A
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Jumlah Pesanan</h6>
                            <h3 class="text-bold mb-10">1000</h3>
                            {{-- <p class="text-sm text-danger">
                  <i class="lni lni-arrow-down"></i> -2.00%
                  <span class="text-gray">Expense</span>
                </p> --}}
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon orange">
                            I
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Pesanan Selesai</h6>
                            <h3 class="text-bold mb-10">100</h3>
                            {{-- <p class="text-sm text-danger">
                  <i class="lni lni-arrow-down"></i> -25.00%
                  <span class="text-gray"> Earning</span>
                </p> --}}
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
            <div class="row">
                <div class="col-lg-5">
                    <div class="card-style calendar-card mb-30">
                        <div id="calendar-mini"></div>
                    </div>
                </div>
                <!-- End Col -->
                <div class="col-lg-7">
                    <div class="card-style mb-30">
                        <div
                            class="title d-flex flex-wrap align-items-center justify-content-between">
                            <div class="left">
                                  <h6 class="text-medium mb-30">Status Catering Terbaru</h6>
                            </div>
                            <div class="right">
                                <div class="select-style-1">
                                    <div class="select-position select-sm">
                                        <select class="light-bg">
                                            <option value="">Today</option>
                                            <option value="">Yesterday</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end select -->
                            </div>
                        </div>
                        <!-- End Title -->
                        <div class="table-responsive">
                            <table class="table top-selling-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6 class="text-sm text-medium">Nama</h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">
                                                Kelas
                                            </h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">
                                                Status
                                            </h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium text-end">
                                                Actions
                                            </h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($absen as $item) --}}
                                        <tr>
                                            <td>
                                                <div class="product">
                                                    <div class="image">
                                                        <img src="" alt="" />
                                                    </div>
                                                    <p class="text-sm">A. Muh. Afrial Ivan Pratama</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm">XII RPL</p>
                                            </td>
                                            <td>
                                                {{-- @if ($item->status === 'hadir')
                                                    <span class="status-btn success-btn">{{ $item->status }}</span>
                                                @endif
                                                @if ($item->status === 'sakit')
                                                    <span class="status-btn warning-btn">{{ $item->status }}</span>
                                                @endif
                                                @if ($item->status === 'izin')
                                                    <span class="status-btn warning-btn">{{ $item->status }}</span>
                                                @endif --}}
                                            </td>
                                            <td>
                                                <div class="action justify-content-end">
                                                    <button class="edit">
                                                        <i class="lni lni-pencil"></i>
                                                    </button>
                                                    <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="lni lni-more-alt"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="moreAction1">
                                                        <li class="dropdown-item">
                                                            <a href="#0" class="text-gray">Remove</a>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <a href="#0" class="text-gray">Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                            <!-- End Table -->
                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== section end ========== -->
@endsection
