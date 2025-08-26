<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CetakController extends Controller
{
    public function index($id)
    {
         $sr = DB::table('surat')
		->select('surat.created_at','surat.nik','penduduk.agama','penduduk.warganegara','penduduk.pekerjaan','penduduk.status_pernikahan','penduduk.tgl_lahir','penduduk.jekel','penduduk.nama','penduduk.alamat','penduduk.tempat_lahir','surat.jenis_surat','surat.status','surat.no_surat','surat.ttd','penduduk.pendidikan')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ([['surat.status','=', '1'],['surat.id','=', $id]])
		->first(); 
        return view('layoutsadmin.cetaksuket', ['sr' => $sr]);
    }
    public function domisil($id)
    {
         $sr = DB::table('surat')
		->select('surat.created_at','surat.nik','penduduk.agama','penduduk.warganegara','penduduk.pekerjaan','penduduk.status_pernikahan','penduduk.tgl_lahir','penduduk.jekel','penduduk.nama','penduduk.alamat','penduduk.tempat_lahir','surat.jenis_surat','surat.status','surat.no_surat','surat.ttd','penduduk.pendidikan')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ([['surat.status','=', '1'],['surat.id','=', $id]])
		->first(); 
        return view('layoutsadmin.cetakdomisil', ['sr' => $sr]);
    }
    public function skpo($id)
    {
         $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','penduduk.kk_id','penduduk.jekel','penduduk.tempat_lahir','penduduk.tgl_lahir','penduduk.agama','penduduk.pekerjaan','penduduk.alamat','penduduk.status_pernikahan','surat.jenis_surat','surat.status','surat.link','no_surat','payah','pibu','ttd')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ([['surat.status','=', '1'],['surat.id','=', $id]])
		->first();
        $ayah = DB::table('penduduk')
        ->where  ([['status_dikeluarga','=', 'Kepala Rumah Tangga'],['kk_id','=', $sr->kk_id]])
		->first();
        $ibu = DB::table('penduduk')
        ->where  ([['status_dikeluarga','=', 'Istri'],['kk_id','=', $sr->kk_id]])
		->first();
        return view('layoutsadmin.cetakskpo', ['sr' => $sr,'ayah' => $ayah, 'ibu' => $ibu]);
    }
    public function sku($id)
    {
         $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','penduduk.kk_id','penduduk.jekel','penduduk.tempat_lahir','penduduk.tgl_lahir','penduduk.agama','penduduk.pekerjaan','penduduk.alamat','penduduk.status_pernikahan','surat.jenis_surat','surat.link','no_surat','ttd','warganegara','pendidikan','nama_usaha','jenis_usaha','alamat_usaha')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ([['surat.status','=', '1'],['surat.id','=', $id]])
		->first();
        $ayah = DB::table('penduduk')
        ->where  ([['status_dikeluarga','=', 'Kepala Rumah Tangga'],['kk_id','=', $sr->kk_id]])
		->first();
        $ibu = DB::table('penduduk')
        ->where  ([['status_dikeluarga','=', 'Istri'],['kk_id','=', $sr->kk_id]])
		->first();
        return view('layoutsadmin.cetaksku', ['sr' => $sr,'ayah' => $ayah, 'ibu' => $ibu]);
    }
    public function spn($id)
    {
         $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','penduduk.kk_id','penduduk.jekel','penduduk.tempat_lahir','penduduk.tgl_lahir','penduduk.agama','penduduk.pekerjaan','penduduk.alamat','penduduk.status_pernikahan','surat.jenis_surat','surat.link','no_surat','ttd','penduduk.warganegara','pendidikan','nama_usaha','jenis_usaha','alamat_usaha','nikah.tujuan','nikah.nama as namap','nikah.jekel as jekelp',
        'nikah.ttl','nikah.warganegara as warganegarap','nikah.agama as agamap','nikah.pekerjaan as pekerjaanp','nikah.nik as nikp','nikah.alamat as alamatp','nikah.binti')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->join('nikah','nikah.surat_id','=','surat.id')
        ->where  ([['surat.status','=', '1'],['surat.id','=', $id]])
		->first();
        $ayah = DB::table('penduduk')
        ->where  ([['status_dikeluarga','=', 'Kepala Rumah Tangga'],['kk_id','=', $sr->kk_id]])
		->first();
       

        return view('layoutsadmin.cetakspn', ['sr' => $sr, 'ayah' => $ayah]);
    }
    public function spnk($id)
    {
         $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','penduduk.kk_id','penduduk.jekel','penduduk.tempat_lahir','penduduk.tgl_lahir','penduduk.agama','penduduk.pekerjaan','penduduk.alamat','penduduk.status_pernikahan','surat.jenis_surat','surat.link','no_surat','ttd','penduduk.warganegara','pendidikan','nama_usaha','jenis_usaha','alamat_usaha','nikah.tujuan','nikah.nama as namap','nikah.jekel as jekelp',
        'nikah.ttl','nikah.warganegara as warganegarap','nikah.agama as agamap','nikah.pekerjaan as pekerjaanp','nikah.nik as nikp','nikah.alamat as alamatp','nikah.binti')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->join('nikah','nikah.surat_id','=','surat.id')
        ->where  ([['surat.status','=', '1'],['surat.id','=', $id]])
		->first();
        $ayah = DB::table('penduduk')
        ->where  ([['status_dikeluarga','=', 'Kepala Rumah Tangga'],['kk_id','=', $sr->kk_id]])
		->first();
        $ibu = DB::table('penduduk')
        ->where  ([['status_dikeluarga','=', 'Istri'],['kk_id','=', $sr->kk_id]])
		->first();
       

        return view('layoutsadmin.cetakspnk', ['sr' => $sr, 'ayah' => $ayah, 'ibu' => $ibu]);
    }
    public function skck($id)
    {
          $sr = DB::table('surat')
		->select('surat.created_at','surat.nik','penduduk.agama','penduduk.warganegara','penduduk.pekerjaan','penduduk.status_pernikahan','penduduk.tgl_lahir','penduduk.jekel','penduduk.nama','penduduk.alamat','penduduk.tempat_lahir','surat.jenis_surat','surat.status','surat.no_surat','surat.ttd','penduduk.pendidikan')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ([['surat.status','=', '1'],['surat.id','=', $id]])
		->first();
        return view('layoutsadmin.cetakskck', ['sr' => $sr]);
    }
    public function ktp($id)
    {
          $sr = DB::table('surat')
		->select('surat.created_at','surat.nik','penduduk.agama','penduduk.warganegara','penduduk.pekerjaan','penduduk.status_pernikahan','penduduk.tgl_lahir','penduduk.jekel','penduduk.nama','penduduk.alamat','penduduk.tempat_lahir','surat.jenis_surat','surat.status','surat.no_surat','surat.ttd','penduduk.pendidikan')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ([['surat.status','=', '1'],['surat.id','=', $id]])
		->first();
        return view('layoutsadmin.cetakktp', ['sr' => $sr]);
    }
    public function spik($id)
    {
          $sr = DB::table('surat')
		->select('surat.created_at','surat.nik','penduduk.agama','penduduk.warganegara','penduduk.pekerjaan','penduduk.status_pernikahan','penduduk.tgl_lahir','penduduk.jekel','penduduk.nama','penduduk.alamat','penduduk.tempat_lahir','surat.jenis_surat','surat.status','surat.no_surat','surat.ttd','penduduk.pendidikan','hari','jam','hiburan','alamat_hiburan')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ([['surat.status','=', '1'],['surat.id','=', $id]])
		->first();
        return view('layoutsadmin.cetakspik', ['sr' => $sr]);
    }
}
