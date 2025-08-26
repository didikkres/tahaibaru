<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
    $galery = \App\Galery::all();
    return view('layoutsadmin.galery', ['galery' => $galery]);
    }
    public function home()
    {
    $galery = \App\Galery::all();
    return view('galeryhome', ['galery' => $galery]);
    }
    public function create(Request $request)
    {
        $image = $request->file('gambar');
        $image->storeAs('public/galery', $image->hashName());
        $berita = new \App\Galery; 
        $berita->gambar =    $image->hashName();
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->save();
        return redirect('/galery')->with('sukses','Data berhasil diinput');
    }
    public function edit($id)
    {
         $kk = \App\Galery::where('id',$id)->first();
        return view('layoutsadmin.galeryedit',['kk' => $kk]);
    }
    public function update(Request $request, $post)
    {

        if ($request->hasFile('gambar')) {

            //upload new image
            $image = $request->file('gambar');
            $image->storeAs('public/galery', $image->hashName());

            //delete old image
            $kk = \App\Galery::where('id',$post)->first();
            Storage::delete('public/galery/'.$kk->foto);
            //update post with new image
            DB::table('galery')->where('id',$request->id)->update([
            'gambar'   => $image->hashName(),
            'judul'   => $request->judul,
            'isi' => $request->isi
            ]);
            

        } else {
            DB::table('galery')->where('id',$request->id)->update([
            'judul' => $request->judul,
            'isi' => $request->isi
            ]);
           
        }
         return redirect('/galery')->with('sukses','Data berhasil diinput');
    }
    public function delete($id)
    {
        $pendidikan = \App\Galery::find($id);
        $pendidikan->delete();
        return redirect('/galery')->with('sukses','Data berhasil Hapus');
    }
}
