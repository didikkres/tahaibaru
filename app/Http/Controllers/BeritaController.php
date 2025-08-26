<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $apbdes = \App\Apbdes::paginate(3);
        $berita = \App\Berita::paginate(3);
        return view('berita', ['berita' => $berita, 'apbdes' => $apbdes]);
    }
    public function baca($id)
    {
        $berita = \App\Berita::where('id',$id)->get();
        return view('bacaberita', ['berita' => $berita]);
    }
}
