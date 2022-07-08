@extends('admin.layouts.master')
@section('content') 
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Ubah profil-desa | {{$profil_desa -> nama_desa}}</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2"> 
                <form class="mx-4" method="post" action="{{route('admin-update-profil-desa', $profil_desa->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                    <div class="form-group">
                      <img src="{{ asset('upload/' . $profil_desa->foto_desa) }}" width="200" alt=""><br>
                      <label for="exampleFormControlFile1">Foto Desa</label>
                      <input type="file" name="foto_desa" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Desa</label>
                        <input type="text" name="nama_desa" class="form-control" id="exampleFormControlInput1" value="{{$profil_desa->nama_desa}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Sejarah</label>
                        <textarea name="sejarah" class="form-control summernote" id="exampleFormControlTextarea1" rows="3">{{$profil_desa->sejarah}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Visi</label>
                      <input type="text" name="visi" class="form-control" id="exampleFormControlInput1" value="{{$profil_desa->visi}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Misi</label>
                      <input type="text" name="misi" class="form-control" id="exampleFormControlInput1" value="{{$profil_desa->misi}}">
                    </div>
                    <div class="col-12 text-end pb-4">
                        <button class="btn bg-gradient-primary mb-0" href="{{route('admin-profil-desa')}}">Simpan</button>
                        <a class="btn bg-gradient-primary mb-0" href="{{route('admin-profil-desa')}}">Batal</a>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection