@extends('layouts.dashboard.main')

@section('container')
    <section class="table-components">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title mb-30">
                            <h2>Menu Catering</h2>
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

            <form class="form-elements-wrapper" action="/dashboard/menu/tambah-menu" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <!-- input style start -->
                        <div class="card-style mb-30">
                            <div class="input-style-1">
                                <label>Nama Menu</label>
                                <input type="text" name="nama" id="nama" placeholder="Inputkan nama menu anda" />
                                <input type="hidden" name="slug" id="slug" value=""/>
                            </div>
                            <!-- end input -->
                            <div class="input-style-1">
                                <label>Harga Menu</label>
                                <input type="text" name="harga" placeholder="Inputkan harga menu anda" />
                            </div>
                            <div class="input-style-1">
                                <label>Isi Menu</label>
                                <textarea name="isi_menu" placeholder="Inputkan isi menu anda" rows="5"></textarea>
                            </div>
                            <!-- end input -->
                            <div class="input-style-1">
                                <label for="formFile">Gambar Menu</label>
                                <input class="form-control" name="foto" type="file" id="formFile">
                            </div>
                            <!-- end input -->
                            <div class="select-style-1">
                                <label>Kategori Menu</label>
                                <div class="select-position">
                                    <select name="id_categori">
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($kategori as $item)
                                            <option value="{{ $item->id }}">{{ $item->isi_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- end input -->
                            <div class="input-style-1">
                                <label>Deskripsi Menu</label>
                                <textarea name="deskripsi" placeholder="Inputkan deskripsi menu anda" rows="5"></textarea>
                            </div>
                            <!-- end input -->
                            <div class="input-style-1">
                                <label>Kisaran Porsi</label>
                                <input type="text" name="kisaran_porsi" placeholder="Inputkan kisaran porsi menu anda" />
                            </div>
                            <!-- end input -->
                            <div class="input-style-1">
                                <label>Pengemasan Menu</label>
                                <textarea name="pengemasan" placeholder="Inputkan pengemasan menu anda" rows="2"></textarea>
                            </div>
                            <!-- end input -->
                            <div class="input-style-1">
                                <label>Catatan Lainnya</label>
                                <textarea name="catatan_lainnya" placeholder="Inputkan catatan lainnya" rows="2"></textarea>
                            </div>
                            <!-- end input -->
                            <div class="d-grid">
                                <button class="btn btn-primary">
                                    Tambah Menu
                                </button>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </form>

        </div>
        <!-- end container -->
    </section>
@endsection

@section('js')

<script src="{{ asset('js/menu-catering.js') }}"></script>
    
@endsection
