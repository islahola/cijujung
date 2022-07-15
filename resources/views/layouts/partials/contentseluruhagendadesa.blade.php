
<div class="berita-utama container mt-5 pb-5  ">
    <h3>Agenda Desa Cijujung</h3>
    @foreach($agenda as $data_agenda)
        <div class="berita-utama-wrap col-9 p-2 d-flex justify-content-center mt-5 mx-auto">
            <a class="text-decoration-none" style="">
                <h4>{{$data_agenda->nama_agenda}}</h4>
                <p>22-02-2022</p>
                <div class="detail-img">
                    <img src="https://www.ugm.ac.id/galleries/crop/16168--730x420px.jpg" alt="cijujung berita cijujung kegiatan">
                </div>
                <p>{{$data_agenda->deskripsi}}</p>
            </a>
        </div>
    @endforeach
</div>
<!-- 

@foreach($agenda as $data_agenda)
    <h3>{{$data_agenda->nama_agenda}}</h3>
    <p>{{$data_agenda->deskripsi}}</p>
@endforeach -->