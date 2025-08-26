<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BltddController extends Controller
{
    public function home()
    {
        $lkk = DB::table('bltdd')
		->select('penduduk.nama','bltdd.bltdd','bltdd.pkh','bltdd.blsm','bltdd.bpnt')
		->join('penduduk','penduduk.nik','=','bltdd.nik')
		->paginate(10);
        return view('bltdd', ['pp' => $lkk]);
    }
    public function read()
    {
        $lkk = DB::table('bltdd')
		->select('bltdd.id','penduduk.nama','bltdd.bltdd','bltdd.pkh','bltdd.blsm','bltdd.bpnt')
		->join('penduduk','penduduk.nik','=','bltdd.nik')
		->paginate(10);
        $rw = \App\Penduduk::all();
        return view('layoutsadmin.badmin', ['pp' => $lkk,'data_p' => $rw]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'nik' => 'required|min:3',
            'bltdd' => 'required',
            'pkh' => 'required',
            'blsm' => 'required',
            'bpnt' => 'required'
        ],[
            'nik.required' => 'Nama Penerima Tidak boleh kosong',
            'bltdd.required' => 'BLTDD Tidak boleh kosong',
            'pkh.required' => 'PKH Tidak boleh kosong',
            'blsm.required' => 'BLSM Tidak boleh kosong',
            'bpnt.required' => 'BPNT Tidak boleh kosong'
        ]);
        \App\Bltdd::create($request->all());
        return redirect('/badmin')->with('sukses','Data berhasil diinput');
    }
    public function delete($id)
    {
        $pendidikan = \App\Bltdd::find($id);
        $pendidikan->delete();
        return redirect('/badmin')->with('sukses','Data berhasil Hapus');
    }
}
