@foreach($agenda as $data_agenda)
    <h3>{{$data_agenda->nama_agenda}}</h3>
    <p>{{$data_agenda->deskripsi}}</p>
@endforeach
<a href="/agenda" class="btn-info ">lihat lebih banyak agenda olla</a>