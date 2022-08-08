  <div class="destinasi mt-5">
    <div class="destinasi__wrap container ">
      <div class="destinasi__judul text-center pt-5 ">
        <h2 class="text-white">Destinasi dan Atraksi</h2>
        <p class="text-white">Desa Cijujung dipenuhi oleh destinasi yang luar biasa</p>
      </div>
      <div class="row destinasi__pc container mx-auto d-flex pb-5 pt-3 destinasi__wrap">
        <div class="col">
          <div class="card mx-auto" style="width: 12rem; " data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div class="wrap-gambar">
              <img  src="{{asset('/frontend-assets/image/foto/tani.JPG')}}" class="card-img-top" alt="wisata bogor sawah tani ">
            </div>
            <div class="card-body">
              <p class="card-text text-center">Pertanian</p>
            </div>
          </div></div>
        <div class="col">
          <div class="card mx-auto" style="width: 12rem;">
          <div class="wrap-gambar">
            <img  src="{{asset('/frontend-assets/image/foto/curug.png')}}" lass="card-img-top" alt="wisata bogor">
          </div>
            <div class="card-body">
              <p class="card-text text-center">Curug</p>
            </div>
          </div>
        </div>
        <div class="col">
        <div class="card mx-auto" style="width: 12rem; ">
        <div class="wrap-gambar">
          <img src="{{asset('/frontend-assets/image/foto/bukit.JPG')}}"  class="card-img-top" alt="wisata bogor bukit galau bukit wisata bukit bogor">
        </div>
            <div class="card-body">
              <p class="card-text text-center">Bukit galau</p>
            </div>
          </div>
        </div>
        <div class="col">
        <div class="card mx-auto" style="width: 12rem; ">
        <div class="wrap-gambar">
          <img src="{{asset('/frontend-assets/image/foto/tebing.png')}}"  class="card-img-top" alt="wisata bogor">
        </div>
            <div class="card-body">
              <p class="card-text text-center">Panjat Tebing</p>
            </div>
          </div>
        </div>
      </div>
      </div>


      <div class="swiperdestinasi mySwiper overflow-hidden">
          <div class="swiper-wrapper pb-3">
            <div class="swiper-slide ">
            <div class="card mx-auto" style="width: 12rem;" >
              <img src="https://i.pinimg.com/236x/5c/41/64/5c41645a92db11f23f74836b5ad291af.jpg" class="card-img-top" alt="wisata bogor">
              <div class="card-body">
                <p class="card-text text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">Ketemu NCT</p>
              </div>
            </div>
            </div>
            <div class="swiper-slide">          
              <div class="card mx-auto" style="width: 12rem;">
                <img src="https://i.pinimg.com/236x/5c/41/64/5c41645a92db11f23f74836b5ad291af.jpg" class="card-img-top" alt="wisata bogor">
                <div class="card-body">
                  <p class="card-text text-center">Ketemu NCT</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">          
              <div class="card mx-auto" style="width: 12rem;">
                <img src="https://i.pinimg.com/236x/5c/41/64/5c41645a92db11f23f74836b5ad291af.jpg" class="card-img-top" alt="wisata bogor">
                <div class="card-body">
                  <p class="card-text text-center">Ketemu NCT</p>
                </div>
              </div>
            </div>
          </div>
          <div class="text-white text-center pb-3">
            <i class="fas fa-chevron-left swiper-button-prev pe-3"></i>
            <i class="fas fa-chevron-right swiper-button-next"></i>
          </div>
        </div>
        @include('layouts.partials.modelWisata')

    </div>

