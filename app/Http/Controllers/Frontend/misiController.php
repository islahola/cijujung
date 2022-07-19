<?php

namespace App\Http\Controllers\Frontend;
use Artesaos\SEOTools\Facades\SEOTools;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class misiController extends Controller
{
    public function index ()
    {
        
        SEOTools::setTitle('Visi Misi');
        SEOTools::setDescription('Misi Misi dari desa dengan banyak wisata yang menarik dan terletak di jawa barat, bogor ');
        SEOTools::opengraph()->setUrl('https://cijujung.herokuapp.com/');
       
        return view("pages.misi", []);
    }
}
