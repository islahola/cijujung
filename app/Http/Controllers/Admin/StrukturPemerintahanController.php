<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\struktur_pemerintahan_desa;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class StrukturPemerintahanController extends Controller
{
    public function index()
    {
        $struktur = struktur_pemerintahan_desa::all();

        return view("admin.struktur.index", [
            'struktur' => $struktur
        ]);
    }
    
    public function add()
    {
        return view("admin.struktur.add");
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'foto_pengurus' => 'required|mimes:jpg,jpeg,bmp,png|max:5012',
            'nama' => 'required',
            'jabatan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'pendidikan' => 'required',
            'nip' => 'required'
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['foto_pengurus'] = $request->file('foto_pengurus')->store('struktur_pemerintahan_desa');

        struktur_pemerintahan_desa::create($data);

        return redirect()->route('admin-pemerintahan-desa')->with('message','success');
    }

    public function edit($id)
    {
        $struktur = struktur_pemerintahan_desa::find($id);
        return view("admin.struktur.edit", [
            'struktur' => $struktur
        ]);
    }

    public function update(Request $request, $id)
    {
        if(empty($request->file('foto_pengurus'))){
            $struktur = struktur_pemerintahan_desa::find($id);
            $struktur->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'pendidikan' => $request->pendidikan,
                'nip' => $request->nip, 
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('admin-pemerintahan-desa')->with('message','success');
        }else{
            $struktur = struktur_pemerintahan_desa::find($id);
            Storage::delete($struktur->foto_pengurus);
            $struktur->update([
                'foto_pengurus' => $request->file('foto_pengurus')->store('struktur_pemerintahan_desa'),
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'pendidikan' => $request->pendidikan,
                'nip' => $request->nip, 
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('admin-pemerintahan-desa')->with('message','success');
        }
    }

    public function delete($id)
    {
        $struktur = struktur_pemerintahan_desa::find($id);

        Storage::delete($struktur->foto_pengurus);

        $struktur->delete($id);

        return redirect()->route('admin-pemerintahan-desa')->with('message','success');
    }
}
  