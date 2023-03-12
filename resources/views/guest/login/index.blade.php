<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuder | Login</title>
    <link rel="stylesheet" href="css/login.css">
    {{-- <link rel="stylesheet" href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}" /> --}}
</head>

<body>
    <img src="img/logo.svg" alt="" class="logo">

    <div class="containerr">
        <img src="img/image 25.svg" alt="" class="bg1">
        <img src="img/image 24.svg" alt="" class="bg2">
        <h2>Masuk</h2>

        @if (session()->has('proses'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {{ session('proses') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf
            <label for="">Username</label>
            <input type="text" name="username">
            <label for="">Password</label>
            <input type="password" name="password">
            <button style="cursor: pointer" type="submit">Masuk</button>
        </form>
    </div>

    <div class="link-pendaftaran grid">
        <a href="/registerpelanggan" class="linkk">Daftar sebagai Pelanggan</a>
        <a href="/registercatering" class="linkk">Daftar sebagai Catering</a>
    </div>

</body>

</html>

