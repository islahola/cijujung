
<div class="potensi container mt-5 pb-5">
  <h3>Data Desa</h3>
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Data Pendidikan Desa</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> Penduduk dan Kepala Keluarga</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Pekerjaan/Mata Pencaharian</button>
    </li>
   
  </ul>
  
  <div class="tab-content col-10 mx-auto" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
        @foreach($data_pendidikan as $data_pendidikan)
        <h3>Data Pendidikan Desa</h3>
        <p>Nama Sekolah : {{$data_pendidikan -> nama_sekolah}} </p>
        <p>Jumlah Guru : {{$data_pendidikan -> jumlah_guru}}</p>
        <p>Jumlah Murid : {{$data_pendidikan -> lokasi}}</p>
        @endforeach
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
    <h3>Jumlah Penduduk	</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Penduduk</th>
                <th scope="col">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Laki-laki</td>
                <td>3.579	</td>
            </tr>
            <tr>
            <th scope="row">2</th>
                <td>Perempuan</td>
                <td>3.15</td>
            </tr>
            <th scope="row">3</th>
                <td>Jumlah Total</td>
                <td>6.729</td>
            </tr>
            <th scope="row">4</th>
                <td>Kepala Keluarga</td>
                <td>1.611</td>
            </tr>
            
        </tbody>
    </table>
    <h3>Komposisi Usia Penduduk	</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Laki-Laki</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Perempuan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Usia 0 - 6 Tahun</td>
                <td>252	</td>
                <td>Usia 0 - 6 Tahun</td>
                <td>205	</td>
            </tr>
            <tr>
                <td>Usia 7 - 12 Tahun	</td>
                <td>452	</td>
                <td>Usia 7 - 12 Tahun	</td>
                <td>421	</td>
            </tr>
            <tr>
                <td>Usia 13 - 18 Tahun	</td>
                <td>6.729</td>
                <td>Usia 13 - 18 Tahun	</td>
                <td>6.729</td>
            </tr>
            <tr>
                <td>Usia 19 - 25 Tahun	</td>
                <td>1.611</td>
                <td>Usia 19 - 25 Tahun	</td>
                <td>1.611</td>
            </tr>
            <tr>
                <td>Usia 26 - 40 Tahun	</td>
                <td>1.611</td>
                <td>Usia 19 - 25 Tahun	</td>
                <td>1.611</td>
            </tr>
            <tr>
                <td>Usia 41 - 55 Tahun	</td>
                <td>1.611</td>
                <td>Usia 41 - 55 Tahun	</td>
                <td>1.611</td>
            </tr>
            <tr>
                <td>Usia 56 - 65 Tahun</td>
                <td>1.611</td>
                <td>Usia 56 - 65 Tahun</td>
                <td>1.611</td>
            </tr>
            <tr>
                <td>Usia 65 - 75 Tahun	</td>
                <td>1.611</td>
                <td>Usia 65 - 75 Tahun	</td>
                <td>1.611</td>
            </tr>
            <tr>
                <td>Usia > 75 Tahun		</td>
                <td>1.611</td>
                <td>Usia > 75 Tahun	</td>
                <td>1.611</td>
            </tr>
            
        </tbody>
    </table>
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
        <h5>Pekerjaan/Mata Pencaharian</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Jenis Pekerjaan	</th>
                    <th scope="col">Laki-laki</th>
                    <th scope="col">Perempuan</th>
                    <th scope="col">jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Petani</td>
                    <td>3.579	</td>
                    <td>3.579	</td>
                    <td>3.579	</td>
                </tr>
                <tr>
                    <td>Buruh Tani	</td>
                    <td>3.15</td>
                    <td>3.15</td>
                    <td>3.15</td>
                </tr>
                <tr>
                    <td>Pegawai Negeri Sipil</td>
                    <td>6.729</td>
                    <td>6.729</td>
                    <td>6.729</td>
                </tr>
                <tr>
                    <td>TNI	</td>
                    <td>1.611</td>
                    <td>1.611</td>
                    <td>1.611</td>
                </tr>
                <tr>
                    <td>Peternak</td>
                    <td>1.611</td>
                    <td>1.611</td>
                    <td>1.611</td>
                </tr>
                <tr>
                    <td>Perawat swasta	</td>
                    <td>1.611</td>
                    <td>1.611</td>
                    <td>1.611</td>
                </tr>
                <tr>
                    <td>Guru swasta	</td>
                    <td>1.611</td>
                    <td>1.611</td>
                    <td>1.611</td>
                </tr>
                
            </tbody>
        </table>
    </div>
  </div>
</div>