<header id="header">
            <nav id="tafNav" class="navigation">
               <div class="container-fluid clearfix">
                  <div class="nav-header">
                     <a class="nav-brand" href="home.html">
                        <img src="{{asset('/frontend-assets/image/logo/logoContoh.png')}}"class="lazy logo--light img-fluid" alt="logo cijujung">
                     </a>
                    
                  </div>
                  <div class="d-flex justify-content-end w-100">
                     <ul class="nav-menus d-none d-sm-none d-md-none d-lg-flex">
                        <li class="dropdown">
                           <a  href="{{ route('/') }}">Beranda</a>
                        </li>
                        <li class="dropdown">
                           <a href="{{ route('profil-desa') }}"  class="dropdown-toggle" id="creditDropdown">Profil Desa</a>
                           <div class="dropdown-menu dropdown--credit">
                              <div class="credit-menu">
                                 <a href="{{ route('potensi') }}">
                                   Potensi Desa
                                 </a>
                                 <a href="{{ route('tentang') }}">
                                     Tentang Desa
                                 </a>
                                 <a href="{{ route('misi') }}">
                                    Visi dan Misi
                                 </a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <a href="{{ route('data-desa') }}">Data Desa</a>
                        </li>
                        <li>
                           <a href="{{ route('berita') }}">Berita</a>
                        </li>
                        <li>
                           <a href="{{ route('agenda') }}">Agenda</a>
                        </li>
                        <li>
                           <a href="https://api.whatsapp.com/send?phone=6281519900010" target="_blank">Kontak Kami</a>
                        </li>
                     </ul>
                     <ul class="nav-other">
                        <li>
                           <div class="nav-toggle pe-5"></div>
                        </li>
                     </ul>
                  </div>
                  <div class="nav-menus-wrapper d-none">
                     <ul class="nav-menu">
                        <li>
                          <a  href="{{ route('/') }}">Beranda</a>                    
                        </li>
                        <li>
                           <a  a href="{{ route('profil-desa') }}">Profil Desa</a>
                           <ul class="nav-dropdown">
                              <li>
                                 <a href="{{ route('potensi') }}">
                                   Potensi Desa
                                 </a>
                              </li>
                              <li>
                                 <a href="{{ route('tentang') }}">
                                     Tentang Desa
                                 </a>
                              </li>
                              <li>
                                 <a href="{{ route('misi') }}">
                                    Visi dan Misi
                                 </a>  
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="{{ route('data-desa') }}">Data Desa</a>
                        </li>
                        <li>
                           <a href="{{ route('berita') }}">Berita</a>
                        </li>
                        <li>
                           <a href="{{ route('agenda') }}">Agenda</a>
                        </li>
                        <li>
                           <a href="https://api.whatsapp.com/send?phone=6288971206673" target="_blank">Kontak Kami</a>
                        </li>

                        @guest
                           @if (Route::has('login'))
                                 <!-- <li ><a href="{{ route('login') }}">Masuk</a></li> -->
                           @endif
                           @else
                           <li ><a href="{{route('admin-dashboard')}}">Dashboard Admin</a></li>
                           <li><a href="{{ route('logout') }}"
                                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Keluar') }}
                                 </a>
                           </li>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                 @csrf
                                 </form>
                           @endguest
                     </ul>
                  </div>
               </div>
            </nav>
         </header>