<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $Profil = \App\Profil::where('kategori','=','sejarah')->first();
        return view('sejarah', ['p' => $Profil]);
    }
    public function kelurahan()
    {
        $Profil = \App\Profil::where('kategori','=','kelurahan')->first();
        return view('kelurahan', ['p' => $Profil]);
    }
    public function visimisi()
    {
        $Profil = \App\Profil::where('kategori','=','visimisi')->first();
        return view('visimisi', ['p' => $Profil]);
    }
    public function profilad()
    {
        $Profil = \App\Profil::all();
        return view('layoutsadmin.profilad', ['pro' => $Profil]);
    }
    public function profiledit($id)
    {
        $Profil = \App\Profil::where('id','=',$id)->first();
        return view('layoutsadmin.profiledit', ['pro' => $Profil]);
    }
    public function profileditya(Request $request)
    {
           //update post
            DB::table('profil')->where('id',$request->id)->update([
            'isi' => $request->isi
            ]);
            
         return redirect('/profilad')->with('sukses','Data berhasil diubah');
    }
}
