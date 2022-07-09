<img src="{{$profil->foto_desa}}" alt="">
<p>{{$profil->nama_desa}}</p>
<p>{{$profil->sejarah}}</p>
<p>{{$profil->visi}}</p>
<p>{{$profil->misi}}</p>

@foreach($struktur_pemerintahan as $data)
    <img src="{{asset('upload/' . $data->foto_pengurus)}}" alt="">
    <p>{{$data->nama}}</p>
    <p>{{$data->jabatan}}</p>
    <p>{{$data->tempat_lahir}}, {{$data->tanggal_lahir}}</p>
    <p>{{$data->pendidikan}}</p>
    <p>{{$data->nip}}</p>
@endforeach