<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\agenda_desa;

class agendaController extends Controller
{
    public function seluruh_agenda()
    {
        $agenda = agenda_desa::all();

        return view("pages.agendadesa", [
            "agenda" => $agenda
        ]);
    }
}
