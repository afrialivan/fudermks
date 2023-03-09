<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuder | Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/dashboard/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/dashboard/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/dashboard/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/dashboard/main.css') }}" />
</head>
<body>
    <img src="img/logo.svg" alt="" class="logo">

    <div class="containerr">
        <img src="img/image 25.svg" alt="" class="bg1">
        <img src="img/image 24.svg" alt="" class="bg2">
        <h2>Masuk</h2>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

        <form action="/login" method="POST">
          @csrf
            <label for="">Username</label>
            <input type="text" name="username">
            <label for="">Password</label>
            <input type="password" name="password">
            <button type="submit">Masuk</button>
        </form>
    </div>
    
    <div class="link-pendaftaran grid">
        <a href="/registerpelanggan" class="linkk">Daftar sebagai Pelanggan</a>
        <a href="/registercatering" class="linkk">Daftar sebagai Catering</a>
    </div>
</body>
</html>