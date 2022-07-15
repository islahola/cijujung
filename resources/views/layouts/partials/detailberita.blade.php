<h1>{{$berita->judul}}</h1>
<p>{{$berita->created_at}}</p>
<div class="detail-img">
  <img src="{{ asset('upload/' . $berita->gambar_berita) }}" alt="">
</div>
<p>{{$berita->konten}}</p>
