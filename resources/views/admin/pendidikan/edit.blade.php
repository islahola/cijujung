@extends('admin.layouts.master')
@section('content') 
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Ubah Data Pendidikan | {{$data_pendidikan -> nama_sekolah}}</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2"> 
                <form class="mx-4" method="post" action="{{route('admin-update-pendidikan-desa', $data_pendidikan->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Sekolah</label>
                        <input type="text" name="nama_sekolah" class="form-control" id="exampleFormControlInput1" value="{{$data_pendidikan->nama_sekolah}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Jumlah Guru</label>
                      <input type="number" name="jumlah_guru" class="form-control" id="exampleFormControlInput1" value="{{$data_pendidikan->jumlah_guru}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Jumlah Murid</label>
                      <input type="number" name="jumlah_murid" class="form-control" id="exampleFormControlInput1" value="{{$data_pendidikan->jumlah_murid}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Lokasi Sekolah</label>
                      <input type="text" name="lokasi" class="form-control" id="exampleFormControlInput1" value="{{$data_pendidikan->lokasi}}">
                  </div>
                    <div class="col-12 text-end pb-4">
                        <button class="btn bg-gradient-primary mb-0" href="{{route('admin-pendidikan-desa')}}">Simpan</button>
                        <a class="btn bg-gradient-primary mb-0" href="{{route('admin-pendidikan-desa')}}">Batal</a>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection