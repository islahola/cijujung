<!-- Berita utama -->
<div class="berita container  py-5">
    <h3 class="pb-4">Berita Utama</h3>
    <div class="row ">
        <div class="berita__utama col-md-12 col-lg-6 col-sm-12 ">     
                <a class="link-berita  text-decoration-none"  style="">
                    <div class="berita__image mx-auto  py-3">
                        <img src="https://www.ugm.ac.id/galleries/crop/16168--730x420px.jpg" alt="cijujung berita cijujung kegiatan">
                    </div>
                    <h3>1 Muharam sangat meriah</h3>
                    <p>Pada Desa cibulubung terdapat desa cijujung bla nbla sa cibulubung terdapat desa cijujung bla nblasa jbsah </p>
                
                </a>
        </div>
        <div class="mt-2 col-md-12 col-lg-5 col-sm-12 ms-4">
            @foreach($berita as $data_berita)
            <div class="berita__daftar">
                <a href="/baca-berita/{{$data_berita->slug}}" class="text-decoration-none" style="">
                    <img src="{{ asset('upload/' . $data_berita->gambar_berita) }}" alt="">
                    <h5>{{$data_berita->judul}}</h4>
                    <p>{{$data_berita->konten}}</p>
                </a>
            </div>
            @endforeach
            <a href="/berita" class="text-decoration-none">
                lihat lebih banyak berita <i class="fas fa-arrow-right"></i> </a>
          
        </div>
        <!-- daftar berita -->
    </div>
</div>