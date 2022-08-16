<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\agenda_desa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = agenda_desa::all();

        return view("admin.agenda.index", [
            'agenda' => $agenda
        ]);
    }

    public function add()
    {
        return view("admin.agenda.add");
    }

    public function create(Request $request)
    {
        // validasi inputannya udah sesuai belum
        $this->validate($request, [
            'gambar_agenda' => 'required|mimes:jpg,jpeg,bmp,png|max:5012',
            'nama_agenda' => 'required',
            'deskripsi' => 'required',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();

        agenda_desa::create($data);
        
        // redirect ke halaman index artikel
        return redirect()->route('admin-agenda')->with('message','success');
    }

    public function edit($id)
    {
        $agenda = agenda_desa::find($id);
        return view("admin.agenda.edit", [
            'agenda' => $agenda
        ]);
    }

    public function update(Request $request, $id){
        if(empty($request->file('gambar_agenda'))){
            $agenda = agenda_desa::find($id);
            $agenda->update([
                'nama_agenda' => $request->nama_agenda,
                'deskripsi' => $request->deskripsi,
                'is_active' => $request->is_active,  
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('admin-agenda')->with('message','success');
        }else{
            $agenda = agenda_desa::find($id);
            Storage::delete($agenda->gambar_agenda);
            $agenda->update([
                'nama_agenda' => $request->nama_agenda,
                'gambar_agenda' => $request->file('gambar_agenda')->store('agenda_desa'),
                'deskripsi' => $request->deskripsi,
                'is_active' => $request->is_active,  
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('admin-agenda')->with('message','success');
        }
    }

    public function delete($id){
        $agenda = agenda_desa::find($id);

        // delete data by the id
        $agenda->delete($id);

        // redirect ke halaman index ss
        return redirect()->route('admin-agenda')->with('message','success');
    }
}
