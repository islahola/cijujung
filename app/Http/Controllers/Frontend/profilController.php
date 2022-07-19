<?php

namespace App\Http\Controllers\Frontend;
use Artesaos\SEOTools\Facades\SEOTools;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\profil_desa;
use App\Models\struktur_pemerintahan_desa;
class profilController extends Controller
{
    public function index ()
    {
        
        SEOTools::setTitle('Profil');
        SEOTools::setDescription('Profil desa cijujung merupakan desa dengan banyak wisata yang menarik dan terletak di jawa barat, bogor ');
        SEOTools::opengraph()->setUrl('https://cijujung.herokuapp.com/');
       
        $profil = profil_desa::all()->first();
        $struktur_pemerintahan = struktur_pemerintahan_desa::all();

        return view("pages.profildesa", [
            "profil" => $profil,
            "struktur_pemerintahan" => $struktur_pemerintahan
        ]);
    }
}
