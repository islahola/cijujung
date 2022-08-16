  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" ">
        <img src="{{ asset('admin-assets') }}/assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Desa Cijujung</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('/')) ? 'active bg-gradient-primary' : '' }} " href="{{route('/')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Lihat Websites</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-dashboard')) ? 'active bg-gradient-primary' : '' }} " href="{{route('admin-dashboard')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-agenda')) ? 'active bg-gradient-primary' : '' }}" href="{{route('admin-agenda')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Agenda</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-destinasi')) ? 'active bg-gradient-primary' : '' }}" href="{{route('admin-destinasi')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Destinasi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-profil-desa')) ? 'active bg-gradient-primary' : '' }}" href="{{route('admin-profil-desa')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">home</i>
            </div>
            <span class="nav-link-text ms-1">Profil Desa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-pendidikan-desa')) ? 'active bg-gradient-primary' : '' }}" href="{{route('admin-pendidikan-desa')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">school</i>
            </div>
            <span class="nav-link-text ms-1">Data Pendidikan Desa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-pemerintahan-desa')) ? 'active bg-gradient-primary' : '' }}" href="{{route('admin-pemerintahan-desa')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Struktur Pemerintahan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-berita-desa')) ? 'active bg-gradient-primary' : '' }}" href="{{route('admin-berita-desa')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Berita Desa</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Pengaturan Akun</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('register')) ? 'active bg-gradient-primary' : '' }}" href="{{route('register')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Tambahkan Admin</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>