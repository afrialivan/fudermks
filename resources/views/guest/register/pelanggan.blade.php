<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi | Fuder</title>
    <link rel="stylesheet" href="css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <img src="img/logo.svg" alt="" class="logo mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="gambar d-none d-lg-block px-5">
                    <img src="img/Group 9.svg" alt="">
                </div>
            </div>
            <div class="col-lg-7">
                <form action="" class="daftar">
                    <h2>Daftar Sekarang !</h2>
                    <p>Sudah Punya Akun? <a href="" class="login">Masuk disini</a></p>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Email</label>
                            <input type="text">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Nomor Telepon</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col-lg-6">
                            <label for="">Nama Lengkap</label>
                            <input type="text">
                            <label for="">Tanggal Lahir</label>
                            <input type="text">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Alamat</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <label for="">Username</label>
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <input type="text">
                        </div>
                        <div class="col-lg-6">
                            <p class="text-success">Username Tersedia</p>
                        </div>
                    </div>
                    <button type="button" class="mt-3 rounded-3" id="btn">
                        Daftar
                    </button>
                </form>
            </div>
        </div>
    </div>
    {{-- <script src="js/register.js"></script> --}}
</body>

</html>
