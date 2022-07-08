<ul>
    <li><a href="/">Beranda</a></li>
    <li><a href="/profil-desa">Profil Desa</a></li>
    <li><a href="/data-desa">Data Desa</a></li>
    <li><a href="/berita">Berita</a></li>
    <li><a href="/agenda">Agenda</a></li>
</ul>

@foreach($agenda as $data_agenda)
    <h3>{{$data_agenda->nama_agenda}}</h3>
    <p>{{$data_agenda->deskripsi}}</p>
@endforeach
<a href="/agenda" class="btn-info ">lihat lebih banyak agenda olla</a>
<h1 class="olla">Olla</h1>

@foreach($berita as $data_berita)
    <a href="/baca-berita/{{$data_berita->slug}}" style="">
        <img src="{{$data_berita->gambar_berita}}" alt="">
        <h3>{{$data_berita->judul}}</h3>
        <p>{{$data_berita->konten}}</p>
    </a>
@endforeach
<a href="/berita">lihat lebih banyak berita</a>