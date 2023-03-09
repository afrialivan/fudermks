<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuder | Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <img src="img/logo.svg" alt="" class="logo">

    <div class="container">
        <img src="img/image 25.svg" alt="" class="bg1">
        <img src="img/image 24.svg" alt="" class="bg2">
        <h2>Masuk</h2>
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
        <a href="daftarPelanggan.html" class="link">Daftar sebagai Pelanggan</a>
        <a href="daftarCatering.html" class="link">Daftar sebagai Catering</a>
    </div>
</body>
</html>