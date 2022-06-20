<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\berita_desa;
use App\Models\agenda_desa;

class homepageController extends Controller
{
    public function index ()
    {
        $agenda = agenda_desa::paginate(3);
        $berita = berita_desa::paginate(6);
        return view("pages.homepage",[
            'agenda' => $agenda,
            'berita' => $berita
        ]);
    }
}
