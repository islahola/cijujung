<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\profil_desa;
use App\Models\struktur_pemerintahan_desa;
class profilController extends Controller
{
    public function index ()
    {
        $profil = profil_desa::all()->first();
        $struktur_pemerintahan = struktur_pemerintahan_desa::all();

        return view("pages.profildesa", [
            "profil" => $profil,
            "struktur_pemerintahan" => $struktur_pemerintahan
        ]);
    }
}
