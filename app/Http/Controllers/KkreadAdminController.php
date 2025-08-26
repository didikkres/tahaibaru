<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KkreadAdminController extends Controller
{
    public function index($id)
    {
    $kk = DB::table('kartu_keluarga')
    ->join('rt','rt.id','=','kartu_keluarga.rt_id')
    ->join('rw', 'rw.id', '=', 'kartu_keluarga.rw_id')
    ->select('kartu_keluarga.foto','kartu_keluarga.namakk', 'kartu_keluarga.id', 'kartu_keluarga.nokk', 'rt.rt', 'rw.rw', 'kartu_keluarga.status_eko')
    ->where('kartu_keluarga.id',$id)
    ->first();
        
   
        $pd = \App\Penduduk::where('kk_id',$id)->get();
        $co = \App\Penduduk::where('kk_id',$id)->count();
        return view('layoutsadmin.kkread', ['kk' => $kk, 'pd' => $pd, 'co' => $co]);
    }
    public function edit($id)
    {
        $rw = \App\Rw::all();
        $rt = DB::table('rt')
		->select('rt.id','rt.nama_ketua','rt.rt','rt.priode1','rt.priode2','rw.rw')
		->join('rw','rt.rw_id','=','rw.id')
		->paginate();
        $kk = \App\Kk::where('id',$id)->first();
        return view('layoutsadmin.kkedit', ['kk' => $kk, 'rt' => $rt, 'rw' => $rw]);
    }
     public function update(Request $request, $post)
    {

        if ($request->hasFile('foto')) {

            //upload new image
            $image = $request->file('foto');
            $image->storeAs('public/fotokk', $image->hashName());

            //delete old image
            $kk = \App\Kk::where('id',$post)->first();
            Storage::delete('public/fotokk/'.$kk->foto);
            //update post with new image
            DB::table('kartu_keluarga')->where('id',$request->id)->update([
            'foto'   => $image->hashName(),
            'namakk' => $request->namakk,
            'nokk'   => $request->nokk,
            'rt_id' => $request->rt_id,
            'rw_id' => $request->rw_id,
            'status_eko' => $request->status_eko
            ]);
            

        } else {
                DB::table('kartu_keluarga')->where('id',$request->id)->update([
            'namakk' => $request->namakk,
            'nokk'   => $request->nokk,
            'rt_id' => $request->rt_id,
            'rw_id' => $request->rw_id,
            'status_eko' => $request->status_eko
            ]);
           
        }
         return redirect('/kk')->with('sukses','Data berhasil diinput');
    }
    public function kluargaedit($id)
    {
        $rw = \App\Rw::all();
        $rt = DB::table('rt')
		->select('rt.id','rt.nama_ketua','rt.rt','rt.priode1','rt.priode2','rw.rw')
		->join('rw','rt.rw_id','=','rw.id')
		->paginate();
        $kk = \App\Penduduk::where('id',$id)->first();
        return view('layoutsadmin.keluargaedit', ['kk' => $kk, 'rt' => $rt, 'rw' => $rw]);
    }
    public function kluargaupdate(Request $request)
    {
        $kk = $request->kk_id;
            DB::table('penduduk')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'nik'   => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'usia' => $request->usia,
            'jekel' => $request->jekel,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'status_pernikahan' => $request->status_pernikahan,
            'status_dikeluarga' => $request->status_dikeluarga,
            'pekerjaan' => $request->pekerjaan,
            'pendidikan' => $request->pendidikan,
            'warganegara' => $request->warganegara
            ]);

         return redirect('/kkread/'.$kk)->with('sukses','Data berhasil diinput');
    }

    public function create(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'kk_id' => 'required',
            'usia' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jekel' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'status_pernikahan' => 'required',
            'status_dikeluarga' => 'required',
            'warganegara' => 'required',
            'pekerjaan' => 'required',
            'pendidikan' => 'required'
        ],[
            'nama' => 'Nama Tidak boleh kosong',
            'kk_id' => 'Nik Tidak boleh kosong',
            'usia' => 'Usia Tidak boleh kosong',
            'tempat_lahir' => 'Tempat Lahir Tidak boleh kosong',
            'tgl_lahir' => 'Tanggal Lahir Tidak boleh kosong',
            'jekel' => 'Jenis Kelamin Tidak boleh kosong',
            'agama' => 'Agama Tidak boleh kosong',
            'alamat' => 'Alamat Tidak boleh kosong',
            'status_pernikahan' => 'Status Pernikahan Tidak boleh kosong',
            'status_dikeluarga' => 'Status Di keluarga Tidak boleh kosong',
            'warganegara' => 'Kewaganegaraan Tidak boleh kosong',
            'pekerjaan' => 'Pekerjaan Tidak boleh kosong',
            'pendidikan' => 'Pendidikan Tidak boleh kosong'
        ]);
        $rt = \App\Penduduk::create($request->all());
        return redirect('/kkread/'.$id)->with('sukses','Data berhasil diinput');
    }

    public function delete($id, $kk)
    {
        $pendidikan = \App\Penduduk::find($id);
        $pendidikan->delete();
        return redirect('/kkread/'.$kk)->with('sukses','Data berhasil Hapus');
    }
}
