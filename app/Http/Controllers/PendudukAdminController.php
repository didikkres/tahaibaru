<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PendudukAdminController extends Controller
{
    public function index()
    {
		$rt = \App\Rt::all();
        $rw = \App\Rw::all();
        $penduduk = DB::table('penduduk')
		->select('penduduk.id','penduduk.nik','penduduk.tempat_lahir','penduduk.tgl_lahir','penduduk.nama','penduduk.status_pernikahan','rt.rt','rw.rw')
		->join('kartu_keluarga','kartu_keluarga.id','=','penduduk.kk_id')
		->join('rt','kartu_keluarga.rt_id','=','rt.id')
		->join('rw','kartu_keluarga.rw_id','=','rw.id')
		->paginate(10);
        return view('layoutsadmin.penduduk',['penduduk' => $penduduk,'rt' => $rt,'rw' => $rw]);
    }
    public function cari(Request $request)
	{
		$rt = \App\Rt::all();
        $rw = \App\Rw::all();
		// menangkap data pencarian
	   $ra = $request->rw;
	   $rb = $request->rt;
    		// mengambil data dari table pegawai sesuai pencarian data
			
		$penduduk = DB::table('penduduk')
		->select('penduduk.id','penduduk.nik','penduduk.tempat_lahir','penduduk.tgl_lahir','penduduk.nama','penduduk.status_pernikahan','rt.rt','rw.rw')
		->join('kartu_keluarga','kartu_keluarga.id','=','penduduk.kk_id')
		->join('rt','kartu_keluarga.rt_id','=','rt.id')
		->join('rw','kartu_keluarga.rw_id','=','rw.id')
		->where  ([['rt.id','=', $rb],['rw.id','=', $ra]])
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('layoutsadmin.penduduk',['penduduk' => $penduduk,'rt' => $rt,'rw' => $rw]);
 
	}
}
