<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\data_pendidikan_desa;

class dataDesaController extends Controller
{
    public function index()
    {
        $data_pendidikan = data_pendidikan_desa::all();

        return view ("pages.datadesa", [
            "data_pendidikan" => $data_pendidikan
        ]);
    }
}
