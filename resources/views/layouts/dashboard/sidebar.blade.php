  <!-- ======== sidebar-nav start =========== -->
  <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
         <img class="img-fluid" src="{{ asset('/img/logo.svg') }}" style="width:70%" alt="logo" />
          
      </div>
      <nav class="sidebar-nav">
          <ul>
              <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }} ">
                  <a href="/dashboard">
                      <span class="icon">
                          <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M17.4166 7.33333C18.9383 7.33333 20.1666 8.56167 20.1666 10.0833V15.5833H16.4999V19.25H5.49992V15.5833H1.83325V10.0833C1.83325 8.56167 3.06159 7.33333 4.58325 7.33333H5.49992V2.75H16.4999V7.33333H17.4166ZM7.33325 4.58333V7.33333H14.6666V4.58333H7.33325ZM14.6666 17.4167V13.75H7.33325V17.4167H14.6666ZM16.4999 13.75H18.3333V10.0833C18.3333 9.57917 17.9208 9.16667 17.4166 9.16667H4.58325C4.07909 9.16667 3.66659 9.57917 3.66659 10.0833V13.75H5.49992V11.9167H16.4999V13.75ZM17.4166 10.5417C17.4166 11.0458 17.0041 11.4583 16.4999 11.4583C15.9958 11.4583 15.5833 11.0458 15.5833 10.5417C15.5833 10.0375 15.9958 9.625 16.4999 9.625C17.0041 9.625 17.4166 10.0375 17.4166 10.5417Z" />
                          </svg>
                      </span>
                      <span class="text">Dashboard</span>
                  </a>
              </li>

              @can('catering')
              <li class="nav-item nav-item-has-children {{ Request::is('dashboard/menu') || Request::is('dashboard/kategori') ? 'active' : '' }}">
                  <a href="/" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_2"
                      aria-controls="ddmenu_2" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="icon">
                          <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M12.8334 1.83325H5.50008C5.01385 1.83325 4.54754 2.02641 4.20372 2.37022C3.8599 2.71404 3.66675 3.18036 3.66675 3.66659V18.3333C3.66675 18.8195 3.8599 19.2858 4.20372 19.6296C4.54754 19.9734 5.01385 20.1666 5.50008 20.1666H16.5001C16.9863 20.1666 17.4526 19.9734 17.7964 19.6296C18.1403 19.2858 18.3334 18.8195 18.3334 18.3333V7.33325L12.8334 1.83325ZM16.5001 18.3333H5.50008V3.66659H11.9167V8.24992H16.5001V18.3333Z" />
                          </svg>
                      </span>
                      <span class="text">Menu Anda</span>
                  </a>
                  <ul id="ddmenu_2" class="collapse dropdown-nav">
                      <li>
                          <a href="/dashboard/menu" class="{{ Request::is('dashboard/menu') ? 'active' : '' }}"> Halaman Menu </a>
                      </li>
                      <li>
                          <a href="/dashboard/kategori" class="{{ Request::is('dashboard/kategori') ? 'active' : '' }}"> Halaman Kategori </a>
                      </li>
                  </ul>
              </li>
              @endcan

              @can('catering')
              <li class="nav-item nav-item-has-children {{ Request::is('dashboard/pesanan/belumkonfir') || Request::is('dashboard/pesanan/belumbayar') || Request::is('dashboard/pesanan/proses') || Request::is('dashboard/pesanan/selesai') ? 'active' : '' }}">
                  <a href="/" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_3"
                      aria-controls="ddmenu_3" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="icon">
                          <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M12.9067 14.2908L15.2808 11.9167H6.41667V10.0833H15.2808L12.9067 7.70917L14.2083 6.41667L18.7917 11L14.2083 15.5833L12.9067 14.2908ZM17.4167 2.75C17.9029 2.75 18.3692 2.94315 18.713 3.28697C19.0568 3.63079 19.25 4.0971 19.25 4.58333V8.86417L17.4167 7.03083V4.58333H4.58333V17.4167H17.4167V14.9692L19.25 13.1358V17.4167C19.25 17.9029 19.0568 18.3692 18.713 18.713C18.3692 19.0568 17.9029 19.25 17.4167 19.25H4.58333C3.56583 19.25 2.75 18.425 2.75 17.4167V4.58333C2.75 3.56583 3.56583 2.75 4.58333 2.75H17.4167Z" />
                          </svg>
                      </span>
                      <span class="text">Pesanan Anda</span>
                  </a>
                  <ul id="ddmenu_3" class="collapse dropdown-nav">
                      <li>
                          <a href="/dashboard/pesanan/belumkonfir" class="{{ Request::is('dashboard/pesanan/belumkonfir') ? 'active' : '' }}"> Belum Konfirmasi </a>
                      </li>
                      <li>
                          <a href="/dashboard/pesanan/belumbayar" class="{{ Request::is('dashboard/pesanan/belumbayar') ? 'active' : '' }}"> Belum Bayar </a>
                      </li>
                      <li>
                          <a href="/dashboard/pesanan/proses" class="{{ Request::is('dashboard/pesanan/proses') ? 'active' : '' }}"> Proses </a>
                      </li>
                      <li>
                          <a href="/dashboard/pesanan/selesai" class="{{ Request::is('dashboard/pesanan/selesai') ? 'active' : '' }}"> Selesai </a>
                      </li>
                  </ul>
              </li>
              @endcan

              @can('admin')
                  <li class="nav-item nav-item-has-children">
                      <a href="/" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_4"
                          aria-controls="ddmenu_2" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="icon">
                              <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                      d="M12.8334 1.83325H5.50008C5.01385 1.83325 4.54754 2.02641 4.20372 2.37022C3.8599 2.71404 3.66675 3.18036 3.66675 3.66659V18.3333C3.66675 18.8195 3.8599 19.2858 4.20372 19.6296C4.54754 19.9734 5.01385 20.1666 5.50008 20.1666H16.5001C16.9863 20.1666 17.4526 19.9734 17.7964 19.6296C18.1403 19.2858 18.3334 18.8195 18.3334 18.3333V7.33325L12.8334 1.83325ZM16.5001 18.3333H5.50008V3.66659H11.9167V8.24992H16.5001V18.3333Z" />
                              </svg>
                          </span>
                          <span class="text">Data Akun</span>
                      </a>
                      <ul id="ddmenu_4" class="collapse dropdown-nav">
                          <li>
                              <a href="/dashboard/akun/pelanggan" class="{{ Request::is('dashboard/akun/pelanggan') ? 'active' : '' }}"> Akun Pelangan </a>
                          </li>
                          <li>
                              <a href="/dashboard/akun/katering" class="{{ Request::is('dashboard/akun/katering') ? 'active' : '' }}"> Akun Katering </a>
                          </li>
                      </ul>
                  </li>
              @endcan


          </ul>
      </nav>
  </aside>
  <div class="overlay"></div>
  <!-- ======== sidebar-nav end =========== -->
