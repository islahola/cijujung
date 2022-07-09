<h1>{{$berita->judul}}</h1>
<p>{{$berita->created_at}}</p>
<img src="{{ asset('upload/' . $berita->gambar_berita) }}" alt="">
<p>{{$berita->konten}}</p>
