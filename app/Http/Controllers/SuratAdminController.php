<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SuratAdminController extends Controller
{
    public function index()
    {
         $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','surat.jenis_surat','surat.status','surat.link')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ('surat.status','=', '0')
		->get();
        return view('layoutsadmin.surat', ['sr' => $sr]);
    }
    public function read()
    {

         $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','surat.ttd','penduduk.nama','surat.jenis_surat','surat.status','surat.link')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ('surat.status','=', '1')
		->orderBy('created_at', 'desc')->get();
        return view('layoutsadmin.suratselesai', ['sr' => $sr]);
    }
    public function konfir($id)
    {
       $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','penduduk.jekel','penduduk.tempat_lahir','penduduk.tgl_lahir','penduduk.agama','penduduk.pekerjaan','penduduk.alamat','penduduk.status_pernikahan','surat.jenis_surat','surat.status','surat.link')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ([['surat.status','=', '0'],['surat.id','=', $id]])
		->first(); 
        return view('layoutsadmin.suratkonfir', ['sr' => $sr]);
    }
    public function skpo($id)
    {
        
       $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','penduduk.kk_id','penduduk.jekel','penduduk.tempat_lahir','penduduk.tgl_lahir','penduduk.agama','penduduk.pekerjaan','penduduk.alamat','penduduk.status_pernikahan','surat.jenis_surat','surat.status','surat.link')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ([['surat.status','=', '0'],['surat.id','=', $id]])
		->first();
        $ayah = DB::table('penduduk')
        ->where  ([['status_dikeluarga','=', 'Kepala Rumah Tangga'],['kk_id','=', $sr->kk_id]])
		->first();
        $ibu = DB::table('penduduk')
        ->where  ([['status_dikeluarga','=', 'Istri'],['kk_id','=', $sr->kk_id]])
		->first();
        return view('layoutsadmin.skpo', ['sr' => $sr,'ayah' => $ayah, 'ibu' => $ibu]);
    }
    public function sku($id)
    {
        
       $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','penduduk.kk_id','penduduk.jekel','penduduk.tempat_lahir','penduduk.tgl_lahir','penduduk.agama','penduduk.pekerjaan','penduduk.alamat','penduduk.status_pernikahan','surat.jenis_surat','surat.status','surat.link')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ([['surat.status','=', '0'],['surat.id','=', $id]])
		->first();
        return view('layoutsadmin.sku', ['sr' => $sr]);
    }
    public function spn($id)
    {
        
       $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','penduduk.kk_id','penduduk.jekel','penduduk.tempat_lahir','penduduk.tgl_lahir','penduduk.agama','penduduk.pekerjaan','penduduk.alamat','penduduk.status_pernikahan','surat.jenis_surat','surat.status','surat.link')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ([['surat.status','=', '0'],['surat.id','=', $id]])
		->first();
        return view('layoutsadmin.spn', ['sr' => $sr]);
    }
    public function spnk($id)
    {
        
       $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','penduduk.kk_id','penduduk.jekel','penduduk.tempat_lahir','penduduk.tgl_lahir','penduduk.agama','penduduk.pekerjaan','penduduk.alamat','penduduk.status_pernikahan','surat.jenis_surat','surat.status','surat.link')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ([['surat.status','=', '0'],['surat.id','=', $id]])
		->first();
        return view('layoutsadmin.spnk', ['sr' => $sr]);
    }
    public function skck($id)
    {
        
       $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','penduduk.kk_id','penduduk.jekel','penduduk.tempat_lahir','penduduk.tgl_lahir','penduduk.agama','penduduk.pekerjaan','penduduk.alamat','penduduk.status_pernikahan','surat.jenis_surat','surat.status','surat.link')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ([['surat.status','=', '0'],['surat.id','=', $id]])
		->first();
        return view('layoutsadmin.skck', ['sr' => $sr]);
    }
    public function ktp($id)
    {
        
       $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','penduduk.kk_id','penduduk.jekel','penduduk.tempat_lahir','penduduk.tgl_lahir','penduduk.agama','penduduk.pekerjaan','penduduk.alamat','penduduk.status_pernikahan','surat.jenis_surat','surat.status','surat.link')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ([['surat.status','=', '0'],['surat.id','=', $id]])
		->first();
        return view('layoutsadmin.ktp', ['sr' => $sr]);
    }
    public function spik($id)
    {
        
       $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','penduduk.kk_id','penduduk.jekel','penduduk.tempat_lahir','penduduk.tgl_lahir','penduduk.agama','penduduk.pekerjaan','penduduk.alamat','penduduk.status_pernikahan','surat.jenis_surat','surat.status','surat.link')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ([['surat.status','=', '0'],['surat.id','=', $id]])
		->first();
        return view('layoutsadmin.spik', ['sr' => $sr]);
    }
    public function post(Request $request, $id)
    {
        $request->validate([
            'no_surat' => 'required',
            'ttd' => 'required'
        ],[
            'no_surat.required' => 'No SuratTidak boleh kosong',
            'ttd.required' => 'TTD Tidak boleh kosong'
        ]);
    $item = \App\Surat::findOrFail($id);
    $item->no_surat = $request->input('no_surat');
    $item->ttd = $request->input('ttd');
    $item->status = '1';
    $item->save();
        $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','surat.jenis_surat','surat.status')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ('surat.status','=', '0')
		->get();
        
        return redirect()->action('SuratAdminController@index', ['sr' => $sr])->with('sukses','Data berhasil konfirmasi');
    }
    public function postskpo(Request $request, $id)
    {
        $request->validate([
            'no_surat' => 'required',
            'ttd' => 'required',
            'payah' => 'required',
            'pibu' => 'required'
        ],[
            'no_surat.required' => 'No SuratTidak boleh kosong',
            'ttd.required' => 'TTD Tidak boleh kosong',
            'payah.required' => 'Penghasilan Ayah Tidak boleh kosong',
            'pibu.required' => 'Penghasilan Ibu Tidak boleh kosong'
        ]);
    $item = \App\Surat::findOrFail($id);
    $item->no_surat = $request->input('no_surat');
    $item->ttd = $request->input('ttd');
    $item->status = '1';
    $item->payah = $request->payah;
    $item->pibu = $request->pibu;
    $item->save();
        $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','surat.jenis_surat','surat.status')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ('surat.status','=', '0')
		->get();
        
        return redirect()->action('SuratAdminController@index', ['sr' => $sr])->with('sukses','Data berhasil konfirmasi');
    }
    public function postsku(Request $request, $id)
    {
        $request->validate([
            'no_surat' => 'required',
            'ttd' => 'required',
            'nama_usaha' => 'required',
            'jenis_usaha' => 'required',
            'alamat_usaha' => 'required'
        ],[
            'no_surat.required' => 'No SuratTidak boleh kosong',
            'ttd.required' => 'TTD Tidak boleh kosong',
            'nama_usaha.required' => 'Nama Usaha Tidak boleh kosong',
            'jenis_usaha.required' => 'Jenis Usaha Tidak boleh kosong',
            'alamat_usaha.required' => 'Alamat Usaha Tidak boleh kosong'
        ]);
    $item = \App\Surat::findOrFail($id);
    $item->no_surat = $request->input('no_surat');
    $item->ttd = $request->input('ttd');
    $item->status = '1';
    $item->nama_usaha = $request->nama_usaha;
    $item->jenis_usaha = $request->jenis_usaha;
    $item->alamat_usaha = $request->alamat_usaha;
    $item->save();
        $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','surat.jenis_surat','surat.status')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ('surat.status','=', '0')
		->get();
        
        return redirect()->action('SuratAdminController@index', ['sr' => $sr])->with('sukses','Data berhasil konfirmasi');
    }
    public function postspn(Request $request, $id)
    {
        $request->validate([
            'no_surat' => 'required',
            'ttd' => 'required',
            'nama' => 'required',
            'binti' => 'required',
            'ttl' => 'required',
            'pekerjaan' => 'required',
            'nik' => 'required',
            'warganegara' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'tujuan' => 'required'
        ],[
            'no_surat.required' => 'No SuratTidak boleh kosong',
            'ttd.required' => 'TTD Tidak boleh kosong',
            'nama.required' => 'Nama Tidak boleh kosong',
            'binti.required' => 'Binti Tidak boleh kosong',
            'ttl.required' => 'TTL Tidak boleh kosong',
            'pekerjaan.required' => 'Pekerjaan Tidak boleh kosong',
            'nik.required' => 'NIK Tidak boleh kosong',
            'warganegara.required' => 'Warganegara Tidak boleh kosong',
            'agama.required' => 'Agama Tidak boleh kosong',
            'alamat.required' => 'Alamat Tidak boleh kosong',
            'tujuan.required' => 'Tujuan Tidak boleh kosong'
        ]);
        // insert tb siswa
        $request->request->add(['surat_id'=>$id]);
        $siswa = \App\Nikah::create($request->all());
        $siswa->save();
        
    $item = \App\Surat::findOrFail($id);
    $item->no_surat = $request->input('no_surat');
    $item->ttd = $request->input('ttd');
    $item->status = '1';
    $item->save();




        $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','surat.jenis_surat','surat.status')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ('surat.status','=', '0')
		->get();
        
        return redirect()->action('SuratAdminController@index', ['sr' => $sr])->with('sukses','Data berhasil konfirmasi');
    }
    public function postskck(Request $request, $id)
    {
        $request->validate([
            'no_surat' => 'required',
            'ttd' => 'required'
        ],[
            'no_surat.required' => 'No SuratTidak boleh kosong',
            'ttd.required' => 'TTD Tidak boleh kosong'
        ]);
    $item = \App\Surat::findOrFail($id);
    $item->no_surat = $request->input('no_surat');
    $item->ttd = $request->input('ttd');
    $item->status = '1';
    $item->save();
        $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','surat.jenis_surat','surat.status')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ('surat.status','=', '0')
		->get();
        
        return redirect()->action('SuratAdminController@index', ['sr' => $sr])->with('sukses','Data berhasil konfirmasi');
    }
    public function postktp(Request $request, $id)
    {
        $request->validate([
            'no_surat' => 'required',
            'ttd' => 'required'
        ],[
            'no_surat.required' => 'No SuratTidak boleh kosong',
            'ttd.required' => 'TTD Tidak boleh kosong'
        ]);
    $item = \App\Surat::findOrFail($id);
    $item->no_surat = $request->input('no_surat');
    $item->ttd = $request->input('ttd');
    $item->status = '1';
    $item->save();
        $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','surat.jenis_surat','surat.status')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ('surat.status','=', '0')
		->get();
        
        return redirect()->action('SuratAdminController@index', ['sr' => $sr])->with('sukses','Data berhasil konfirmasi');
    }
    public function postspik(Request $request, $id)
    {
        $request->validate([
            'no_surat' => 'required',
            'ttd' => 'required',
            'hari' => 'required',
            'jam' => 'required',
            'hiburan' => 'required',
            'alamat_hiburan' => 'required'
        ],[
            'no_surat.required' => 'No SuratTidak boleh kosong',
            'ttd.required' => 'TTD Tidak boleh kosong',
            'hari.required' => 'Hari Tidak boleh kosong',
            'jam.required' => 'Jam Tidak boleh kosong',
            'hiburan.required' => 'Hiburan Tidak boleh kosong',
            'alamat_hiburan,required' => 'Alamat Tidak boleh kosong'
        ]);
    $item = \App\Surat::findOrFail($id);
    $item->no_surat = $request->input('no_surat');
    $item->ttd = $request->input('ttd');
    $item->hari = $request->input('hari');
    $item->jam = $request->input('jam');
    $item->hiburan = $request->input('hiburan');
    $item->alamat_hiburan = $request->input('alamat_hiburan');
    $item->status = '1';
    $item->save();
        $sr = DB::table('surat')
		->select('surat.id','surat.created_at','surat.nik','penduduk.nama','surat.jenis_surat','surat.status')
		->join('penduduk','penduduk.nik','=','surat.nik')
        ->where  ('surat.status','=', '0')
		->get();
        
        return redirect()->action('SuratAdminController@index', ['sr' => $sr])->with('sukses','Data berhasil konfirmasi');
    }
}
