@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/menu.css">
@endsection

@section('container')
<main>

  <div class="nav-menu mt-2 d-lg-flex gridd">
    <div class="nav-menu-item active">
      <a href="" class="text-decoration-none">
        <h4>PRASMANAN</h4>
        <p>4 product</p>
      </a>
    </div>
    <div class="nav-menu-item ">
      <a href="" class="text-decoration-none">
        <h4>NASI KOTAK</h4>
        <p>4 product</p>
      </a>
    </div>
    <div class="nav-menu-item ">
      <a href="" class="text-decoration-none">
        <h4>SNACK/JAJANAN</h4>
        <p>4 product</p>
      </a>
    </div>
    <div class="nav-menu-item ">
      <a href="" class="text-decoration-none">
        <h4>MENU LAIN</h4>
        <p>4 product</p>
      </a>
    </div>
    <div class="nav-menu-item ">
      <a href="" class="text-decoration-none">
        <h4>MINUMAN</h4>
        <p>4 product</p>
      </a>
    </div>
  </div>

  <form action="" class="search mt-3 mb-3 position-relative">
    <input type="text" class="search-text" placeholder="Cari Menu pilihan kamu disini" id="search">
    <button class="search-btn"><img src="img/search.svg" alt=""></button>
    <div class="list position-absolute mt-5 d-none" id="list">
      <ul class="mt-3">
        <li><a href="" class="text-decoration-none text-dark">Ayam Goreng Mentega - 12 Potong</a></li>
        <li><a href="" class="text-decoration-none text-dark">Ayam Goreng Mentega - 12 Potong</a></li>
      </ul>
    </div>
  </form>

  <div class="urutan d-flex align-items-center mb-5">
    <div class="urutan-text">
      <a>Urut berdasarkan</a>
    </div>
    <div class="urutans">
      <a href="" class="text-decoration-none">Harga Terendah</a> /
      <a href="" class="text-decoration-none">Tertinggi</a>
    </div>
  </div>


  <div class="cards gridd">
    <div class="card mb-4">
      <a href="" class="text-decoration-none">
        <div class="card-img mb-3">
          <img class="d-block m-auto" src="img/gambar1.png" alt="">
        </div>
        <div class="card-text">
          <h4 class="fw-bold text-dark">Catering Pansa</h4>
          <p class="text-dark">Ayam Goreng Mentega - 12 Potong</p>
          <h3 class="d-flex justify-content-end fw-bold text-dark">Rp 180.000</h3>
        </div>
      </a>
    </div>

    <div class="card mb-4">
      <a href="" class="text-decoration-none">
        <div class="card-img mb-3">
          <img class="d-block m-auto" src="img/gambar1.png" alt="">
        </div>
        <div class="card-text">
          <h4 class="fw-bold text-dark">Catering Pansa</h4>
          <p class="text-dark">Ayam Goreng Mentega - 12 Potong</p>
          <h3 class="d-flex justify-content-end fw-bold text-dark">Rp 180.000</h3>
        </div>
      </a>
    </div>

    <div class="card mb-4">
      <a href="" class="text-decoration-none">
        <div class="card-img mb-3">
          <img class="d-block m-auto" src="img/gambar1.png" alt="">
        </div>
        <div class="card-text">
          <h4 class="fw-bold text-dark">Catering Pansa</h4>
          <p class="text-dark">Ayam Goreng Mentega - 12 Potong</p>
          <h3 class="d-flex justify-content-end fw-bold text-dark">Rp 180.000</h3>
        </div>
      </a>
    </div>

    <div class="card mb-4">
      <a href="" class="text-decoration-none">
        <div class="card-img mb-3">
          <img class="d-block m-auto" src="img/gambar1.png" alt="">
        </div>
        <div class="card-text">
          <h4 class="fw-bold text-dark">Catering Pansa</h4>
          <p class="text-dark">Ayam Goreng Mentega - 12 Potong</p>
          <h3 class="d-flex justify-content-end fw-bold text-dark">Rp 180.000</h3>
        </div>
      </a>
    </div>

    <div class="card mb-4">
      <a href="" class="text-decoration-none">
        <div class="card-img mb-3">
          <img class="d-block m-auto" src="img/gambar1.png" alt="">
        </div>
        <div class="card-text">
          <h4 class="fw-bold text-dark">Catering Pansa</h4>
          <p class="text-dark">Ayam Goreng Mentega - 12 Potong</p>
          <h3 class="d-flex justify-content-end fw-bold text-dark">Rp 180.000</h3>
        </div>
      </a>
    </div>

    <div class="card mb-4">
      <a href="" class="text-decoration-none">
        <div class="card-img mb-3">
          <img class="d-block m-auto" src="img/gambar1.png" alt="">
        </div>
        <div class="card-text">
          <h4 class="fw-bold text-dark">Catering Pansa</h4>
          <p class="text-dark">Ayam Goreng Mentega - 12 Potong</p>
          <h3 class="d-flex justify-content-end fw-bold text-dark">Rp 180.000</h3>
        </div>
      </a>
    </div>



  </div>

</main>
@endsection

@section('js')
    <script src="js/menu.js"></script>
@endsection
