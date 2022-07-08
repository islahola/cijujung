@extends('admin.layouts.master')
@section('content') 
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Ubah Berita | {{$berita -> judul}}</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2"> 
                <form class="mx-4" method="post" action="{{route('admin-update-berita-desa', $berita->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                    <div class="form-group">
                      <img src="{{ asset('upload/' . $berita->gambar_berita) }}" width="200" alt=""><br>
                      <label for="exampleFormControlFile1">Gambar Berita</label>
                      <input type="file" name="gambar_berita" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Judul</label>
                        <input type="text" name="judul" class="form-control" id="exampleFormControlInput1" value="{{$berita->judul}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Status</label>
                      <select name="is_active" class="form-control" id="exampleFormControlSelect1">
                        <option value="1" {{$berita->is_active == '1' ? 'selected' : ''}}>Publish</option>
                        <option value="0" {{$berita->is_active == '0' ? 'selected' : ''}}>Draft</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">Konten</label>
                      <textarea name="konten" class="form-control summernote" id="exampleFormControlTextarea1" rows="3">{{$berita->konten}}</textarea>
                  </div>
                    
                    <div class="col-12 text-end pb-4">
                        <button class="btn bg-gradient-primary mb-0">Simpan</button>
                        <a class="btn bg-gradient-primary mb-0" href="{{route('admin-berita-desa')}}">Batal</a>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection