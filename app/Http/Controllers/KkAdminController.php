<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Kk;
use App\Penduduk;

class KkAdminController extends Controller
{
    public function index()
    {
    $results = DB::table('kartu_keluarga')
    ->leftJoin('penduduk', 'penduduk.kk_id', '=', 'kartu_keluarga.id')
    ->join('rt','rt.id','=','kartu_keluarga.rt_id')
    ->join('rw', 'rw.id', '=', 'kartu_keluarga.rw_id')
    ->select('kartu_keluarga.foto','kartu_keluarga.namakk', 'kartu_keluarga.id', 'kartu_keluarga.nokk', 'rt.rt', 'rw.rw', 'kartu_keluarga.status_eko')
    ->selectRaw('COUNT(DISTINCT penduduk.id) as total')
    ->groupBy('kartu_keluarga.id')
    ->orderBy('total', 'desc')
    ->get();
        $rt = \App\Rt::all();
        $rw = \App\Rw::all();
        return view('layoutsadmin.kk', ['results' => $results,'rt' => $rt,'rw' => $rw]);
    }

    public function create(Request $request)
    {
        $image = $request->file('foto');
        $image->storeAs('public/fotokk', $image->hashName());
        $rt = \App\Kk::create([
            'foto'     => $image->hashName(),
            'namakk'     => $request->namakk,
            'nokk'   => $request->nokk,
            'rt_id' => $request->rt_id,
            'rw_id' => $request->rw_id,
            'status_eko' => $request->status_eko
                ]);
        return redirect('/kk')->with('sukses','Data berhasil diinput');
    }
    public function delete($id)
    {
        $pendidikan = \App\Kk::find($id);
        $pendidikan->delete();
        return redirect('/kk')->with('sukses','Data berhasil Hapus');
    }
}
