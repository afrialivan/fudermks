<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Catering</title>
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="css/register-catering.css">
</head>

<body class="bg">

    <div class="d-block m-auto mb-5">
        <div class="logo">
            <img class="d-block mt-4 mb-4 m-auto img-fluid" src="{{ asset('img/logo-putih.svg') }}"
                style="width: 200px;" alt="">
        </div>
        <div class="kotak bg-light d-block m-auto rounded-3 p-4 mt-3">
            <p class="h2 text-center">Pendaftaran Catering</p>
            <p class="h6 mt-4">Data Pemilik</p>
            <form action="/registercatering" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label for="input" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="input" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label for="input" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control @error('tlp') is-invalid @enderror" id="input"
                                name="tlp" value="{{ old('tlp') }} ">
                            @error('tlp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label for="input" class="form-label">Nama Pemilik</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="input" name="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label for="input" class="form-label">NIK (Nomor Induk Kependudukan) Pemilik</label>
                            <input type="text" value="{{ old('nik') }}" class="form-control @error('nik') is-invalid @enderror" id="input"
                                name="nik">
                            @error('nik')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label for="input" class="form-label">Tanggal Lahir Pemilik</label>
                            <input type="date" value="{{ old('tgl_lahir') }}" class="form-control  @error('tgl_lahir') is-invalid @enderror"
                                id="input" name="tgl_lahir">
                            @error('tgl_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label for="input" class="form-label">Alamat Pemilik</label>
                            <input type="text" value="{{ old('alamat') }}" class="form-control @error('alamat') is-invalid @enderror" id="input" name="alamat">
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label for="input" class="form-label">Upload Foto KTP Pemilik</label>
                            <input value="{{ old('ktp') }}" class="form-control @error('ktp') is-invalid @enderror" type="file" id="formFile" name="ktp">
                            @error('ktp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label for="input" class="form-label">Upload Foto KTP bersama Pemilik</label>
                            <input value="{{ old('selfi_ktp') }}" class="form-control @error('selfi_ktp') is-invalid @enderror" type="file" id="formFile" name="selfi_ktp">
                            @error('selfi_ktp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <p class="h6 mt-4">Data Catering</p>
                <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Catering</label>
                            <input type="text"  class="form-control @error('namacatering') is-invalid @enderror" id="nama" name="namacatering"
                            value="{{ old('namacatering') }}">
                            @error('namacatering')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <input type="hidden" class="form-control" id="slug" name="slug">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label for="input" class="form-label">Deskripsi Catering</label>
                            <input type="text" value="{{ old('deskripsi') }}" class="form-control @error('deskripsi') is-invalid @enderror" id="input" name="deskripsi">
                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label for="input" class="form-label">Logo Catering</label>
                            <input value="{{ old('logo') }}" class="form-control @error('logo') is-invalid @enderror" type="file" id="formFile" name="logo">
                            @error('logo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label for="input" class="form-label">Alamat Catering</label>
                            <input type="text" value="{{ old('alamatcatering') }}" class="form-control @error('alamatcatering') is-invalid @enderror" id="input" name="alamatcatering">
                            @error('alamatcatering')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <p class="h6 mt-4">Data Akun</p>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="input" class="form-label">Username</label>
                            <input type="text" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" id="input" name="username">
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control @error('confirmpassword') is-invalid @enderror" id="exampleInputPassword1"
                                name="confirmpassword">
                            @error('confirmpassword')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 d-grid">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="js/register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
