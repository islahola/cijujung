@foreach($berita as $data_berita)
    <a href="/baca-berita/{{$data_berita->slug}}" style="">
        <img src="{{ asset('upload/' . $data_berita->gambar_berita) }}" alt="">
        <h3>{{$data_berita->judul}}</h3>
        <p>{{$data_berita->konten}}</p>
    </a>
@endforeach