<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $p = DB::table('penduduk')
        ->selectRaw('COUNT(DISTINCT penduduk.id) as total')
        ->first();
        $kk = DB::table('kartu_keluarga')
        ->selectRaw('COUNT(DISTINCT kartu_keluarga.id) as total')
        ->first();
        $rt = DB::table('rt')
        ->selectRaw('COUNT(DISTINCT rt.id) as total')
        ->first();
        $rw = DB::table('rw')
        ->selectRaw('COUNT(DISTINCT rw.id) as total')
        ->first();
        $sr1 = DB::table('surat')
        ->selectRaw('COUNT(DISTINCT surat.id) as total')
        ->where  ('status','=', '1')
        ->first();
        $sr2 = DB::table('surat')
        ->selectRaw('COUNT(DISTINCT surat.id) as total')
        ->where  ('status','=', '0')
        ->first();
        return view('layoutsadmin.dashboard', ['p' => $p,'kk' => $kk,'rt' => $rt,'rw' => $rw,'sr1' => $sr1,'sr2' => $sr2]);
    }
}
