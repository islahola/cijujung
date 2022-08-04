<!-- Berita utama -->
<div class="berita container  py-5 overflow-hidden">
    <h3 class="pb-4 text-center">Berita Utama</h3>
    <div class="row ">
        <div class="berita__utama mx-auto col-10 col-md-12 col-lg-6 col-sm-10 ">  
        @foreach($beritaTerbaru as $data_berita)
                   <a class="link-berita  text-decoration-none"  style="">
                    <div class="berita__image mx-auto  py-3">
                    <img src="{{ asset('upload/' . $data_berita->gambar_berita) }}" alt="{{$data_berita->judul}}">
                    </div>
                    <h3 class="text-capitalize">{{$data_berita->judul}}</h3>
                    <p class="text-capitalize">{{$data_berita->konten}} </p>
                
                </a>
        @endforeach
        </div>
        <div class="mt-2 col-8 col-md-8 col-lg-5 col-sm-8 ms-4 ">
            @foreach($berita as $data_berita)
            <div class="berita__daftar  pt-2">
                <a href="/baca-berita/{{$data_berita->slug}}" class="text-decoration-none" style="">
                    <h5 class="text-uppercase fs-6">{{$data_berita->judul}}</h4>
                    <p class="text-capitalize">{{Str::limit($data_berita->konten,50)}}</p>
                </a>
            </div>
            @endforeach
            <a href="/berita" class="text-decoration-none ps-2">lihat lebih banyak berita <i class="fas fa-arrow-right"></i> </a>
          
        </div>
        <!-- daftar berita -->
    </div>
</div>