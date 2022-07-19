<?php

namespace App\Http\Controllers\Frontend;
use Artesaos\SEOTools\Facades\SEOTools;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\data_pendidikan_desa;

class dataDesaController extends Controller
{
    public function index()
    {
        
        SEOTools::setTitle('Data Desa');
        SEOTools::setDescription('data desa cijujung desa cijujung merupakan desa dengan banyak wisata yang menarik dan terletak di jawa barat, bogor ');
        SEOTools::opengraph()->setUrl('https://cijujung.herokuapp.com/');
       
        $data_pendidikan = data_pendidikan_desa::all();

        return view ("pages.datadesa", [
            "data_pendidikan" => $data_pendidikan
        ]);
    }
}
