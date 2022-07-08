<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\profil_desa;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ProfilDesaController extends Controller
{
    public function index()
    {
        $profil_desa = profil_desa::all();

        return view("admin.profil-desa.index", [
            'profil_desa' => $profil_desa
        ]);
    }

    public function edit($id)
    {
        $profil_desa = profil_desa::find($id);

        return view("admin.profil-desa.edit", [
            'profil_desa' => $profil_desa
        ]);
    }

    public function update(Request $request, $id)
    {
        if(empty($request->file('foto_desa'))){
            $profil_desa = profil_desa::find($id);
            $profil_desa->update([
                'nama_desa' => $request->nama_desa,
                'sejarah' => $request->sejarah,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('admin-profil-desa')->with('message','success');
        }else{
            $profil_desa = profil_desa::find($id);
            Storage::delete($profil_desa->foto_desa);
            $profil_desa->update([
                'foto_desa' => $request->file('foto_desa')->store('profil_desa'),
                'nama_desa' => $request->nama_desa,
                'sejarah' => $request->sejarah,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('admin-profil-desa')->with('message','success');
        }
    }
}
