<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\berita_desa;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = berita_desa::all();

        return view("admin.berita.index", [
            'berita' => $berita
        ]);
    }
    
    public function add()
    {
        return view("admin.berita.add");
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'gambar_berita' => 'required|mimes:jpg,jpeg,bmp,png|max:5012',
            'judul' => 'required',
            'konten' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);
        $data['user_id'] = Auth::id();
        $data['gambar_berita'] = $request->file('gambar_berita')->store('berita_desa');
        $data['views'] = 0;
        berita_desa::create($data);

        return redirect()->route('admin-berita-desa')->with('message','success');
    }

    public function edit($id)
    {
        $berita = berita_desa::find($id);
        return view("admin.berita.edit", [
            'berita' => $berita
        ]);
    }

    public function update(Request $request, $id)
    {
        if(empty($request->file('gambar_berita'))){
            $berita = berita_desa::find($id);
            $berita->update([
                'judul' => $request->judul,
                'konten' => $request->konten,
                'slug' => Str::slug($request->judul),
                'user_id' => Auth::id(),
                'is_active' => $request->is_active
            ]);
            return redirect()->route('admin-berita-desa')->with('message','success');
        }else{
            $berita = berita_desa::find($id);
            Storage::delete($berita->gambar_berita);
            $berita->update([
                'gambar_berita' => $request->file('gambar_berita')->store('berita_desa'),
                'judul' => $request->judul,
                'konten' => $request->konten,
                'slug' => Str::slug($request->judul),
                'user_id' => Auth::id(),
                'is_active' => $request->is_active
            ]);
            return redirect()->route('admin-berita-desa')->with('message','success');
        }
    }

    public function delete($id)
    {
        $berita = berita_desa::find($id);

        Storage::delete($berita->gambar_berita);

        $berita->delete($id);

        return redirect()->route('admin-berita-desa')->with('message','success');
    }
}
