<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BeritaAdminController extends Controller
{
     public function index()
    {
        $berita = \App\Berita::paginate(10);
        return view('layoutsadmin.berita', ['berita' => $berita]);
    }
     public function read()
    {
        return view('layoutsadmin.beritatambah');
    }
    public function create(Request $request)
    {
        $image = $request->file('gambar');
        $image->storeAs('public/berita', $image->hashName());
        $berita = new \App\Berita;    
        $berita->title = $request->title;
        $berita->subjudul = $request->subjudul;
        $berita->berita = $request->berita;
        $berita->gambar = $image->hashName();
        $berita->kategori = 'Admin';
        $berita->save();
        return redirect('/beritaadmin')->with('sukses','Data berhasil diinput');
    }
    public function edit($id)
    {
         $kk = \App\Berita::where('id',$id)->first();
        return view('layoutsadmin.beritaedit',['kk' => $kk]);
    }
    public function update(Request $request, $post)
    {

        if ($request->hasFile('gambar')) {

            //upload new image
            $image = $request->file('gambar');
            $image->storeAs('public/berita', $image->hashName());

            //delete old image
            $kk = \App\Berita::where('id',$post)->first();
            Storage::delete('public/berita/'.$kk->foto);
            //update post with new image
            DB::table('berita')->where('id',$request->id)->update([
            'gambar'   => $image->hashName(),
            'title' => $request->title,
            'subjudul'   => $request->subjudul,
            'berita' => $request->berita
            ]);
            

        } else {
            DB::table('berita')->where('id',$request->id)->update([
            'title' => $request->title,
            'subjudul'   => $request->subjudul,
            'berita' => $request->berita
            ]);
           
        }
         return redirect('/beritaadmin')->with('sukses','Data berhasil diinput');
    }
    public function delete($id)
    {
        $pendidikan = \App\Berita::find($id);
        $pendidikan->delete();
        return redirect('/beritaadmin')->with('sukses','Data berhasil Hapus');
    }
}
