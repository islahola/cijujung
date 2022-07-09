@foreach($data_pendidikan as $data_pendidikan)
    <h1>Data Pendidikan Desa</h1>
    <p>Nama Sekolah : {{$data_pendidikan -> nama_sekolah}} </p>
    <p>Jumlah Guru : {{$data_pendidikan -> jumlah_guru}}</p>
    <p>Jumlah Murid : {{$data_pendidikan -> lokasi}}</p>
@endforeach