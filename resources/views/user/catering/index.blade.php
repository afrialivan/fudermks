@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="../css/isi-catering.css">
    <link rel="stylesheet" href="../css/sidenav.css">
    <link rel="stylesheet" href="../css/footer.css">
@endsection

@section('container')
    <main>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../#" class="text-decoration-none">Catering Pratama</a></p>
                </li>
                <li class="breadcrumb-item text-dark active" aria-current="page">Prasmanan</p>
                </li>
            </ol>
            <!-- <hr> -->
        </nav>

        <div class="row">
            <div class="col-lg-6"><img src="{{ asset('storage/' . $catering->logo) }}" alt="" class="gambar"></div>
            <div class="col-lg-6">
                <h1 class="mt-2">{{ $catering->nama }}</h1>
                <p class="mb-4">{{ $catering->alamat }}</p>
                <p>{{ $catering->deskripsi }}</p>
                <div class="row">
                    <div class="col-9 contact">
                        <p><strong>Kontak : </strong>{{ $catering->user->tlp }}</p>
                        <p><strong>Instagram : </strong>{{ '@' . $catering->ig }}</p>
                    </div>
                    <div class="col-3">
                        <img src="../img/wa.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="nav-menu d-lg-flex gridd">
            <div class="nav-menu-item active">
                <a href="../" class="text-decoration-none">
                    <h4>PRASMANAN</h4>
                    <p>{{ $menu->where('id_categori', '1')->count() }} product</p>
                </a>
            </div>
            <div class="nav-menu-item ">
                <a href="../" class="text-decoration-none">
                    <h4>NASI KOTAK</h4>
                    <p>{{ $menu->where('id_categori', '2')->count() }} product</p>
                </a>
            </div>
            <div class="nav-menu-item ">
                <a href="../" class="text-decoration-none">
                    <h4>SNACK/JAJANAN</h4>
                    <p>{{ $menu->where('id_categori', '3')->count() }} product</p>
                </a>
            </div>
        </div>

        {{-- <div class="cardds gridd mt-5">
            <div class="cardd">
                <a class="text-decoration-none">
                        <img class="d-block m-auto mt-3" src="../img/gambar1.png" alt="">
                        <div class="text-cardd">
                            <h5>{{ $menu->nama }}</h5>
                            <h3>Rp {{ $menu->harga }}</h3>
                            <a href="/catering/{{ $catering->slug }}/{{ $menu->slug }}" class="btn btn-outline-dark float-md-end buttong me-md-4">Lihat Lebih
                                Detail</a>
                            </div>
                    </a>
                </div>
            </div> --}}




        @foreach ($menus as $menu)
            <div class="content mt-5 d-block m-auto shadow px-3 pb-4 pt-3 rounded">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                        <div class="img-menu d-block m-auto rounded-lg mb-3">
                            @if ($menu->foto)
                                <img class="d-block m-auto" src="{{ asset('storage/' . $menu->foto) }}" alt="">
                            @else
                                <img class="d-block m-auto" src="http://source.unsplash.com/500x500?catering"
                                    alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                        <div class="text-menu">
                            <p class="h2 mb-1 fw-bold">{{ $menu->nama }}</p>
                            <p class="h3 fw-bold bg-success text-light p-1">Rp {{ $menu->harga }}</p>
                            <p class="fs-6">{{ $menu->isi_menu }}</p>
                            <div class="d-grid">
                                <a href="/catering/{{ $catering->slug }}/{{ $menu->slug }}"
                                    class="btn btn-outline-success">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach




    </main>
@endsection
