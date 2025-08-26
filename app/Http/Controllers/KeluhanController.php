<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    public function index()
    {
        $kl = \App\Keluhan::all();
        return view('layoutsadmin.keluhan', ['kl' => $kl]);
    }
    public function create(Request $request)
    {
        \App\Keluhan::create($request->all());
        return redirect('/')->with('sukses','Data berhasil diinput');
    }
}
