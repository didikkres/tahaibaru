<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RwAdminController extends Controller
{
    public function index()
    {
        $rw = \App\Rw::all();
        return view('layoutsadmin.rw', ['rw' => $rw]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'ketua_nama' => 'required|min:3',
            'rw' => 'required',
            'priode1' => 'required',
            'priode2' => 'required'
        ],[
            'ketua_.required' => 'Nama Tidak boleh kosong',
            'rw.required' => 'RT Tidak boleh kosong',
            'priode1.required' => 'Priode Awal Tidak boleh kosong',
            'priode2.required' => 'Priode Akhir Tidak boleh kosong'
        ]);
        $rw = \App\Rw::create($request->all());
        return redirect('/rw')->with('sukses','Data berhasil diinput');
    }
    public function delete($id)
    {
        $pendidikan = \App\Rw::find($id);
        $pendidikan->delete();
        return redirect('/rw')->with('sukses','Data berhasil Hapus');
    }
}
