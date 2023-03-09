@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/catering.css">
@endsection

@section('container')
    <main>
        <div class="cardds gridd">
            @foreach ($caterings as $catering)
                <div class="cardd">
                    <a class="text-decoration-none" href="catering/{{ $catering->slug }}">
                        <img src="img/Pratama.png" alt="">
                        <div class="text-cardd">
                            <h3 class="fw-bold">{{ $catering->nama }}</h3>
                            <p>{{ $catering->deskripsi }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>





    </main>
@endsection
