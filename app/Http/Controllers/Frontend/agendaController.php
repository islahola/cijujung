<?php

namespace App\Http\Controllers\Frontend;
use Artesaos\SEOTools\Facades\SEOTools;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\agenda_desa;

class agendaController extends Controller
{
    public function seluruh_agenda()
    {
        
        SEOTools::setTitle('Agenda');
        SEOTools::setDescription('Agenda desa cijujung merupakan desa dengan banyak wisata yang menarik dan terletak di jawa barat, bogor ');
        SEOTools::opengraph()->setUrl('https://cijujung.herokuapp.com/');
       
        $agenda = agenda_desa::all();

        return view("pages.agendadesa", [
            "agenda" => $agenda
        ]);
    }
}
