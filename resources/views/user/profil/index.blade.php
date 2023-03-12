@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection

@section('container')
    <main>

        <div class="profil-foto">
            <div class="foto">
                <img src="img/seruni.png" alt="">
            </div>
            <h3>{{ $user[0]->name }}</h3>
        </div>
        <p class="h3 ubah text-center"><a href="" class="text-decoration-none text">Ubah Foto Profil Anda</a></p>
        <div class="batas mb-3"></div>

        <h4>Profil</h4>
        <table>
            <tr>
                <th>Nama</th>
                <td>
                    <a href="" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#nama"
                        data-bs-whatever="@mdo">{{ $user[0]->name }}</a>
                </td>
                <td class="text-end">
                    <button type="button" class="btn text-decoration-none text-dark" data-bs-toggle="modal"
                        data-bs-target="#nama" data-bs-whatever="@mdo">
                        <h5>
                            <i class="bi bi-chevron-right"></i>
                        </h5>
                    </button>
                </td>
            </tr>
            <tr>
                <th>Username</th>
                <td>
                    <a href="" class="text-decoration-none text-dark" data-bs-toggle="modal"
                        data-bs-target="#username" data-bs-whatever="@mdo">
                        {{ '@' . $user[0]->username }}
                    </a>
                </td>
                <td class="text-end">
                    <button type="button" class="btn text-decoration-none text-dark" data-bs-toggle="modal"
                        data-bs-target="#username" data-bs-whatever="@mdo">
                        <h5>
                            <i class="bi bi-chevron-right"></i>
                        </h5>
                    </button>
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>
                    <a href="" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#alamat"
                        data-bs-whatever="@mdo">
                        {{ $user[0]->alamat }}
                    </a>
                </td>
                <td class="text-end">
                    <button type="button" class="btn text-decoration-none text-dark" data-bs-toggle="modal"
                        data-bs-target="#alamat" data-bs-whatever="@mdo">
                        <h5>
                            <i class="bi bi-chevron-right"></i>
                        </h5>
                    </button>
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>
                    <a href="" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#email"
                        data-bs-whatever="@mdo">
                        {{ $user[0]->email }}
                    </a>
                </td>
                <td class="text-end">
                    <button type="button" class="btn text-decoration-none text-dark" data-bs-toggle="modal"
                        data-bs-target="#email" data-bs-whatever="@mdo">
                        <h5>
                            <i class="bi bi-chevron-right"></i>
                        </h5>
                    </button>
                </td>
            </tr>
            <tr>
                <th>Nomor Telepon</th>
                <td>
                    <a href="" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#tlp"
                        data-bs-whatever="@mdo">
                        {{ $user[0]->tlp }}
                    </a>
                </td>
                <td class="text-end">
                    <button type="button" class="btn text-decoration-none text-dark" data-bs-toggle="modal"
                        data-bs-target="#tlp" data-bs-whatever="@mdo">
                        <h5>
                            <i class="bi bi-chevron-right"></i>
                        </h5>
                    </button>
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>
                    <a href="" class="text-decoration-none text-dark" data-bs-toggle="modal"
                        data-bs-target="#tgl-lahir" data-bs-whatever="@mdo">
                        {{ $user[0]->tgl_lahir }}
                    </a>
                </td>
                <td class="text-end">
                    <button type="button" class="btn text-decoration-none text-dark" data-bs-toggle="modal"
                        data-bs-target="#tgl-lahir" data-bs-whatever="@mdo">
                        <h5>
                            <i class="bi bi-chevron-right"></i>
                        </h5>
                    </button>
                </td>
            </tr>
        </table>

        <div class="button mb-5">
            <a href="" class="btn btnn text fw-bold" data-bs-toggle="modal" data-bs-target="#sandi"
                data-bs-whatever="@mdo">Ubah Kata Sandi</a>
            <a href="/logout" class="btn btnn text fw-bold">Keluar Akun</a>
        </div>




        <!-- nama-->
        <div class="modal fade" id="nama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nama</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- username-->
        <div class="modal fade" id="username" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Username</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- alamat-->
        <div class="modal fade" id="alamat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Alamat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Email-->
        <div class="modal fade" id="email" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Email</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- nomor telepon-->
        <div class="modal fade" id="tlp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nomor Telepon</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- tgl lahir-->
        <div class="modal fade" id="tgl-lahir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tanggal Lahir</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- kata sandi-->
        <div class="modal fade" id="sandi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kata Sandi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="password" class="form-control" id="recipient-name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </main>
@endsection
