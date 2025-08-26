<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LkkController extends Controller
{
    public function lkkadmin()
    {
        $lkk = \App\Lkk::all();
        return view('layoutsadmin.lkk', ['data_lkk' => $lkk]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'jabatan' => 'required',
            'lkd' => 'required',
            'masa_jabatan' => 'required'
        ],[
            'nama.required' => 'Nama Tidak boleh kosong',
            'jabatan.required' => 'Jabatan Tidak boleh kosong',
            'lkd.required' => 'LKD Tidak boleh kosong',
            'masa_jabatan.required' => 'Masa Jabatan Tidak boleh kosong'
        ]);
        $rt = \App\Lkk::create($request->all());
        return redirect('/lkkadmin')->with('sukses','Data berhasil diinput');
    }
    public function karangtaruna()
    {
        $lkk = \App\Lkk::where('lkd','=','karangtaruna')->get();
        return view('karangtaruna', ['data_lkk' => $lkk]);
    }
    public function pkk()
    {
        $lkk = \App\Lkk::where('lkd','=','pkk')->get();
        return view('pkk', ['data_lkk' => $lkk]);
    }
    public function lpmk()
    {
        $lkk = \App\Lkk::where('lkd','=','lpmk')->get();
        return view('lkmd', ['data_lkk' => $lkk]);
    }
    public function rt()
    {
        $rt = DB::table('rt')
		->select('rt.id','rt.nama_ketua','rt.rt','rt.priode1','rt.priode2','rw.rw')
		->join('rw','rt.rw_id','=','rw.id')
		->paginate();
        return view('rt', ['rt' => $rt]);
    }
    public function posyandu()
    {
        $lkk = \App\Lkk::where('lkd','=','posyandu')->get();
        return view('posyandu', ['data_lkk' => $lkk]);
    }
}
