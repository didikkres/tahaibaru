<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RtAdminController extends Controller
{
    public function index()
    {
        $rt = DB::table('rt')
		->select('rt.id','rt.nama_ketua','rt.rt','rt.priode1','rt.priode2','rw.rw')
		->join('rw','rt.rw_id','=','rw.id')
		->paginate();
        $rw = \App\Rw::all();
        return view('layoutsadmin.rt', ['rt' => $rt,'data_rw' => $rw]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'nama_ketua' => 'required|min:3',
            'rt' => 'required',
            'rw_id' => 'required',
            'priode1' => 'required',
            'priode2' => 'required'
        ],[
            'nama_ketua.required' => 'Nama Tidak boleh kosong',
            'rt.required' => 'RT Tidak boleh kosong',
            'rw_id.required' => 'RW Tidak boleh kosong',
            'priode1.required' => 'Priode Awal Tidak boleh kosong',
            'priode2.required' => 'Priode Akhir Tidak boleh kosong'
        ]);
        $rt = \App\Rt::create($request->all());
        return redirect('/rt')->with('sukses','Data berhasil diinput');
    }
    public function delete($id)
    {
        $pendidikan = \App\Rt::find($id);
        $pendidikan->delete();
        return redirect('/rt')->with('sukses','Data berhasil Hapus');
    }
}
