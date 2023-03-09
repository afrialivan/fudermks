<header>
  <nav class="side-nav" id="side-nav">

    <div class="nav-container">
      <a href="profil.html" class="text-decoration-none">
        <div class="nav-foto">
          <div class="foto">
            <img src="img/profil.png" alt="">
          </div>
          <h3>Selamat Datang, {{ auth()->user()->name }}</h3>
        </div>
      </a>

      <div class="nav-a position-relative">
        <div class="bg-nav" id="bg-nav"></div>
        <a class="text-decoration-none" href="/catering" id="catering">
          <img src="{{asset('img/catering-aktif.svg')}}" alt="">
          <h3 class="on-page">CATERING</h3>
        </a>
        <a class="text-decoration-none" href="/menu" id="menu">
          <img src="{{ asset('img/menu.png') }}" alt="">
          <h3>MENU</h3>
        </a>
        <a class="text-decoration-none" href="/keranjang" id="keranjang">
          <img src="{{ asset('img/keranjang.png') }}" alt="">
          <h3>KERANJANG</h3>
        </a>
        <a class="text-decoration-none" href="/pesanan" id="pesanan">
          <img src="{{ asset('img/pesanan.png') }}" alt="">
          <h3>PESANAN</h3>
        </a>
      </div>
    </div>


    <div class="copyright">
      <p class="text-center text-light">Copyright</p>
      <p class="text-center text-light">PT. Fuder Makanan Indonesia</p>
    </div>

  </nav>
</header>