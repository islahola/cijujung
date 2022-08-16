<?php

namespace App\Http\Controllers\Frontend;
use Artesaos\SEOTools\Facades\SEOTools;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\berita_desa;
use App\Models\agenda_desa;
use App\Models\destinasi;

class homepageController extends Controller
{
    public function index ()
    {
        SEOTools::setTitle('Home');
        SEOTools::setDescription('desa cijujung merupakan desa dengan banyak wisata yang menarik dan terletak di jawa barat, bogor ');
        SEOTools::opengraph()->setUrl('https://cijujung.herokuapp.com/');
        $agenda = agenda_desa::paginate(3);
        $destinasi = destinasi::paginate(3);
        $berita = berita_desa::paginate(6)->sortByDesc('id');
        $beritaTerbaru = berita_desa::paginate(1)->sortByDesc('id');
        return view("pages.homepage",[
            'agenda' => $agenda,
            'destinasi' => $destinasi,
            'berita' => $berita,
            'beritaTerbaru' => $beritaTerbaru,
        ]);
    }
}
