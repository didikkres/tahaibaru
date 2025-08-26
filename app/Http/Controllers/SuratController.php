<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index()
    {
        return view('surat');
    }
    public function cari($ket)
    {
        return view('cari',['ket' => $ket]);
    }
    public function carinik(Request $request)
    {
        $ket = $request->ket;
        $nik = $request->nik;
       // $penduduk = \App\Penduduk:: where('nik','=',$nik)->firstOrFail();
        $penduduk = \App\Penduduk::where('nik',$nik)->first();

        if (empty($penduduk)){
            $no = 1;
             return view('cari',['ket' => $ket, 'no' => $no]);
        }else{
             return view('suket',['penduduk' => $penduduk, 'ket' => $ket]);       
                   
    }
}
    public function create(Request $request)
    {
        // insert tb user
        $surat  = new \App\Surat;
        $surat->nik = $request->nik;
        $surat->jenis_surat = $request->jenis_surat;
        $surat->status = '0';
        $surat->keterangan = $request->keterangan;
        $surat->link = $request->link;
        $surat->save();
        return redirect('/surat')->with('sukses','Surat berhasil dibuat');
    }
}
