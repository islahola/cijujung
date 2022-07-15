<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class tentangController extends Controller
{
    public function index ()
    {
        return view("pages.tentang", []);
    }
}
