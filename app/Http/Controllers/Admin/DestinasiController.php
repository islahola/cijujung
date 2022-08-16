<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\destinasi;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DestinasiController extends Controller
{
    public function index()
    {
        $destinasi = destinasi::all();

        return view("admin.destinasi.index", [
            'destinasi' => $destinasi
        ]);
    }

    public function add()
    {
        return view("admin.destinasi.add");
    }

    public function create(Request $request)
    {
        // validasi inputannya udah sesuai belum
        $this->validate($request, [
            'gambar_destinasi' => 'required|mimes:jpg,jpeg,bmp,png|max:5012',
            'nama_destinasi' => 'required',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();

        destinasi::create($data);
        
        // redirect ke halaman index artikel
        return redirect()->route('admin-destinasi')->with('message','success');
    }

    public function edit($id)
    {
        $destinasi = destinasi::find($id);
        return view("admin.destinasi.edit", [
            'destinasi' => $destinasi
        ]);
    }

    public function update(Request $request, $id){
        if(empty($request->file('gambar_destinasi'))){
            $destinasi = destinasi::find($id);
            $destinasi->update([
                'nama_destinasi' => $request->nama_destinasi,
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('admin-destinasi')->with('message','success');
        }else{
            $destinasi = destinasi::find($id);
            Storage::delete($destinasi->gambar_destinasi);
            $destinasi->update([
                'nama_destinasi' => $request->nama_destinasi,
                'gambar_destinasi' => $request->file('gambar_destinasi')->store('destinasi'),
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('admin-destinasi')->with('message','success');
        }
    }

    public function delete($id){
        $destinasi = destinasi::find($id);

        // delete data by the id
        $destinasi->delete($id);

        // redirect ke halaman index ss
        return redirect()->route('admin-destinasi')->with('message','success');
    }
}
