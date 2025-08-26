<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeWebController extends Controller
{
    public function index()
    {
        $berita = \App\Berita::paginate(2);
        $galery = \App\Galery::paginate(3);
        $apbdes = \App\Apbdes::paginate(2);
        return view('home', ['berita' => $berita, 'galery' => $galery, 'apbdes' => $apbdes]);
    }
}
