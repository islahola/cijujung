<div class="berita-utama container mt-5 pb-5  ">
    <h2>Berita Utama</h2>
    @foreach($berita as $data_berita)
        <div class="berita-utama-wrap col-9 p-2 d-flex justify-content-center mt-5 mx-auto">
            <a href="/baca-berita/{{$data_berita->slug}}" class="text-decoration-none" style="">
                <!-- <img src="{{ asset('upload/' . $data_berita->gambar_berita) }}" alt=""> -->
                <h4 class="pt-3">{{$data_berita->judul}}</h4>
                <p>22-02-2022</p>
                <div class="detail-img">
                    <img src="https://www.ugm.ac.id/galleries/crop/16168--730x420px.jpg" alt="cijujung berita cijujung kegiatan">
                </div>
                <p>{{$data_berita->konten}}</p>
            </a>
        </div>
    @endforeach
</div>