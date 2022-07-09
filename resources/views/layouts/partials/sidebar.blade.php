<ul>
    <li><a href="{{ route('/') }}">Beranda</a></li>
    <li><a href="{{ route('profil-desa') }}">Profil Desa</a></li>
    <li><a href="{{ route('data-desa') }}">Data Desa</a></li>
    <li><a href="{{ route('berita') }}">Berita</a></li>
    <li><a href="{{ route('agenda') }}">Agenda</a></li>
    @guest
        @if (Route::has('login'))
            <li ><a href="{{ route('login') }}">Masuk</a></li>
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