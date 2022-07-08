<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\data_pendidikan_desa;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DataPendidikanController extends Controller
{
    public function index()
    {
        $data_pendidikan = data_pendidikan_desa::all();

        return view("admin.pendidikan.index", [
            'data_pendidikan' => $data_pendidikan
        ]);
    }

    public function add()
    {
        return view("admin.pendidikan.add");
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nama_sekolah' => 'required',
            'jumlah_guru' => 'required',
            'jumlah_murid' => 'required',
            'lokasi' => 'required',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();

        data_pendidikan_desa::create($data);
        
        // redirect ke halaman index artikel
        return redirect()->route('admin-pendidikan-desa')->with('message','success');
    }

    public function edit($id)
    {
        $data_pendidikan = data_pendidikan_desa::find($id);

        return view("admin.pendidikan.edit", [
            'data_pendidikan' => $data_pendidikan
        ]);
    }

    public function update(Request $request, $id){
        $data_pendidikan = data_pendidikan_desa::find($id);

        $data_pendidikan->update([
            'nama_sekolah' => $request->nama_sekolah,
            'jumlah_guru' => $request->jumlah_guru,
            'jumlah_murid' => $request->jumlah_murid,
            'lokasi' => $request->lokasi,  
            'user_id' => Auth::id(),
        ]);
        // redirect ke halaman index
        return redirect()->route('admin-pendidikan-desa')->with('message','success');
    }

    public function delete($id){
        $data_pendidikan = data_pendidikan_desa::find($id);

        // delete data by the id
        $data_pendidikan->delete($id);

        // redirect ke halaman index ss
        return redirect()->route('admin-pendidikan-desa')->with('message','success');
    }
}
