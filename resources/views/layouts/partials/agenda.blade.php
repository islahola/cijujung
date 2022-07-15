<div class="home-agenda container overflow-hidden py-5">
@foreach($agenda as $data_agenda)
    <div class="swiper mySwiper overflow-hidden">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
        <div class="row align-items-center">
            <div class="col-6 col-sm-12  col-md-12 col-lg-6 bannner">
                <img src="https://i.ytimg.com/vi/n4_FpaYgFqQ/maxresdefault.jpg" alt=" agenda 17 agustus desa cijujung">
            </div>
            <div class="col-6  col-sm-12  col-md-10 col-lg-6  titile">
                <h1>Pengumuman{{$data_agenda->nama_agenda}}</h1>
                <p>{{$data_agenda->deskripsi}} Berdasarkan Keputusan Gubernur Nomor 582 Tahun 2022 pada tanggal 21 Juni 2022 tentang Penetapan Lokasi Pengembangan Rumah Sakit Pusat Otak Nasional Prof.Dr. dr. Mahar Mardjono Jakarta. Dengan ini diberitahukan informasi penting yang berkaitan dengan rencana pembangunan ini.</p>
                <a href="/agenda" class=" btn btn-primary">lihat lebih banyak agenda olla</a>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div> 
        </div>
        </div>
        <div class="swiper-slide">
            <div class="row align-items-center">
                <div class=" col-6 col-sm-12  col-md-12 col-lg-6 bannner">
                    <img src="https://i.ytimg.com/vi/n4_FpaYgFqQ/maxresdefault.jpg" alt=" agenda 17 agustus desa cijujung">
                </div>
                <div class="col-6 col-sm-12  col-md-12 col-lg-6 titile">
                    <h1>Pengumuman{{$data_agenda->nama_agenda}}</h1>
                    <p>{{$data_agenda->deskripsi}} Berdasarkan Keputusan Gubernur Nomor 582 Tahun 2022 pada tanggal 21 Juni 2022 tentang Penetapan Lokasi Pengembangan Rumah Sakit Pusat Otak Nasional Prof.Dr. dr. Mahar Mardjono Jakarta. Dengan ini diberitahukan informasi penting yang berkaitan dengan rencana pembangunan ini.</p>
                    <a href="/agenda" class=" btn btn-primary">lihat lebih banyak agenda olla</a>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div> 
            </div>
        </div>
        <div class="swiper-slide">
            <div class="row align-items-center">
                <div class="col-6 col-sm-12  col-md-12 col-lg-6 bannner">
                    <img src="https://i.ytimg.com/vi/n4_FpaYgFqQ/maxresdefault.jpg" alt=" agenda 17 agustus desa cijujung">
                </div>
                <div class="col-6 col-sm-12  col-md-12 col-lg-6 titile">
                    <h1>Pengumuman{{$data_agenda->nama_agenda}}</h1>
                    <p>{{$data_agenda->deskripsi}} Berdasarkan Keputusan Gubernur Nomor 582 Tahun 2022 pada tanggal 21 Juni 2022 tentang Penetapan Lokasi Pengembangan Rumah Sakit Pusat Otak Nasional Prof.Dr. dr. Mahar Mardjono Jakarta. Dengan ini diberitahukan informasi penting yang berkaitan dengan rencana pembangunan ini.</p>
                    <a href="/agenda" class=" btn btn-primary">lihat lebih banyak agenda olla</a>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div> 
            </div>
        </div>
      </div>  
    </div>

    @endforeach

</div>

<!-- @foreach($agenda as $data_agenda)
    <div class="home-agenda container">
        <div class="row">
            <div class="col-6 bannner">
                <img src="https://i.ytimg.com/vi/n4_FpaYgFqQ/maxresdefault.jpg" alt=" agenda 17 agustus desa cijujung">
            </div>
            <div class="col-6 titile">
                <h1>Pengumuman{{$data_agenda->nama_agenda}}</h1>
                <p>{{$data_agenda->deskripsi}} Berdasarkan Keputusan Gubernur Nomor 582 Tahun 2022 pada tanggal 21 Juni 2022 tentang Penetapan Lokasi Pengembangan Rumah Sakit Pusat Otak Nasional Prof.Dr. dr. Mahar Mardjono Jakarta. Dengan ini diberitahukan informasi penting yang berkaitan dengan rencana pembangunan ini.</p>
                
            </div> 
        </div>
    </div>
@endforeach -->

