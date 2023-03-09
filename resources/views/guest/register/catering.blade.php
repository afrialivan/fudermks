<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Catering</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register-catering.css">
</head>

<body class="bg">

  <div class="d-block m-auto mb-5">
    <div class="logo">
      <img class="d-block m-auto" src="{{ asset('') }}" style="width: 150px;" alt="">
    </div>
    <div class="kotak bg-light d-block m-auto rounded-3 p-4 mt-3">
      <p class="h2">Daftar Catering !</p>
      <p class="h6">Data Pemilik</p>
      <form action="">
        <div class="row">
          <div class="col-12 col-lg-6 col-sm-6 col-md-6">
            <div class="mb-3">
              <label for="input" class="form-label">Email</label>
              <input type="email" class="form-control" id="input">
            </div>
          </div>
          <div class="col-12 col-lg-6 col-sm-6 col-md-6">
            <div class="mb-3">
              <label for="input" class="form-label">Nomor Telepon</label>
              <input type="text" class="form-control" id="input">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-6 col-sm-6 col-md-6">
            <div class="mb-3">
              <label for="input" class="form-label">Nama Pemilik</label>
              <input type="text" class="form-control" id="input">
            </div>
          </div>
          <div class="col-12 col-lg-6 col-sm-6 col-md-6">
            <div class="mb-3">
              <label for="input" class="form-label">NIK (Nomor Induk Kependudukan) Pemilik</label>
              <input type="text" class="form-control" id="input">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-6 col-sm-6 col-md-6">
            <div class="mb-3">
              <label for="input" class="form-label">Tanggal Lahir Pemilik</label>
              <input type="date" class="form-control" id="input">
            </div>
          </div>
          <div class="col-12 col-lg-6 col-sm-6 col-md-6">
            <div class="mb-3">
              <label for="input" class="form-label">Alamat Pemilik</label>
              <input type="text" class="form-control" id="input">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-6 col-sm-6 col-md-6">
            <div class="mb-3">
              <label for="input" class="form-label">Upload Foto KTP Pemilik</label>
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>
          <div class="col-12 col-lg-6 col-sm-6 col-md-6">
            <div class="mb-3">
              <label for="input" class="form-label">Upload Foto KTP bersama Pemilik</label>
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>
        </div>
        <p class="h6">Data Pemilik</p>
        <div class="row">
          <div class="col-12 col-lg-6 col-sm-6 col-md-6">
            <div class="mb-3">
              <label for="input" class="form-label">Nama Catering</label>
              <input type="text" class="form-control" id="input">
            </div>
          </div>
          <div class="col-12 col-lg-6 col-sm-6 col-md-6">
            <div class="mb-3">
              <label for="input" class="form-label">Deskripsi Catering</label>
              <input type="text" class="form-control" id="input">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-6 col-sm-6 col-md-6">
            <div class="mb-3">
              <label for="input" class="form-label">Logo Catering</label>
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>
          <div class="col-12 col-lg-6 col-sm-6 col-md-6">
            <div class="mb-3">
              <label for="input" class="form-label">Alamat Catering</label>
              <input type="text" class="form-control" id="input">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-6 col-sm-6 col-md-6">
            <div class="mb-3">
              <label for="input" class="form-label">Username</label>
              <input type="text" class="form-control" id="input">
            </div>
          </div>
        </div>
        <div class="row align-items-end">
          <div class="col-12 col-lg-6 col-sm-6 col-md-6">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
          </div>
          <div class="col-4">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Konfirmasi Kata Sandi</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
          </div>
          <div class="col-2">
            <div class="mb-3">
              <button class="btn btn-primary">Register</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
