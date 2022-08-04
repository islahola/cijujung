
<div class="berita-utama container mt-5 pb-5  ">
    <h3>Agenda Desa Cijujung</h3>
    @foreach($agenda as $data_agenda)
        <div class="berita-utama-wrap col-9 p-2 px-5     d-flex justify-content-center mt-5 mx-auto">
            <a class="text-decoration-none" style="">
                <h4>{{$data_agenda->nama_agenda}}</h4>
                <p>{{$data_agenda->created_at}}</p>
                <div class="detail-img">
                    <img src="{{ asset('upload/' . $data_agenda->gambar_agenda) }}" alt="{{$data_agenda->judul}}">
                </div>
                <p class="mt-3 blockquote-footer fs-6 ">{{$data_agenda->deskripsi}}</p>
            </a>
        </div>
    @endforeach
</div>
<!-- 

@foreach($agenda as $data_agenda)
    <h3>{{$data_agenda->nama_agenda}}</h3>
    <p>{{$data_agenda->deskripsi}}</p>
@endforeach -->