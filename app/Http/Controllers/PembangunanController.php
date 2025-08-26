<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PembangunanController extends Controller
{
    public function index()
    {
        $lkk = \App\Pembangunan::all();
        return view('pembangunan', ['pp' => $lkk]);
    }
    public function detail($id)
    {
        $lkk = \App\Pembangunan::where('id',$id)->first();
        return view('pembangunandetail', ['pp' => $lkk]);
    }
    public function read()
    {
        $lkk = \App\Pembangunan::all();
        return view('layoutsadmin.padmin', ['pp' => $lkk]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'nama_keg' => 'required|min:3',
            'alamat' => 'required',
            'sumber_dana' => 'required',
            'anggaran' => 'required',
            'volume' => 'required',
            'pelaksana' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required'
        ],[
            'nama_keg.required' => 'Nama Keg Tidak boleh kosong',
            'alamat.required' => 'Alamat Tidak boleh kosong',
            'sumber_dana.required' => 'Sumber Dana Tidak boleh kosong',
            'anggaran.required' => 'Anggaran Tidak boleh kosong',
            'volume.required' => 'Volume Tidak boleh kosong',
            'pelaksana.required' => 'Pelaksana Tidak boleh kosong',
            'tahun.required' => 'Tahun Tidak boleh kosong',
            'keterangan.required' => 'Keterangan Tidak boleh kosong'
        ]);
        $image = $request->file('gambar');
        $image->storeAs('public/pembangunan', $image->hashName());
        $berita = new \App\Pembangunan; 
        $berita->gambar =    $image->hashName();
        $berita->nama_keg = $request->nama_keg;
        $berita->alamat = $request->alamat;
        $berita->sumber_dana = $request->sumber_dana;
        $berita->anggaran = $request->anggaran;
        $berita->volume = $request->volume;
        $berita->pelaksana = $request->pelaksana;
        $berita->tahun = $request->tahun;
        $berita->keterangan = $request->keterangan;
        $berita->save();
        return redirect('/padmin')->with('sukses','Data berhasil diinput');
    }
    public function delete($id)
    {
        $pendidikan = \App\Pembangunan::find($id);
        $pendidikan->delete();
        return redirect('/padmin')->with('sukses','Data berhasil Hapus');
    }
}
