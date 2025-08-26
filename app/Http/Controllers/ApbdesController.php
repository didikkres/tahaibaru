<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ApbdesController extends Controller
{
    public function index()
    {
    $apbdes = \App\Apbdes::paginate(5);
    return view('layoutsadmin.apbdes', ['apbdes' => $apbdes]);
    }
    public function home()
    {
        $berita = \App\Berita::paginate(2);
        $apbdes = \App\Apbdes::paginate(2);
        return view('apbdes',['berita' => $berita, 'apbdes' => $apbdes]);
    }
    public function create(Request $request)
    {
        $image = $request->file('gambar');
        $image->storeAs('public/apbdes', $image->hashName());
        $berita = new \App\Apbdes; 
        $berita->gambar =    $image->hashName();
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->save();
        return redirect('/apbdes')->with('sukses','Data berhasil diinput');
    }
    public function edit($id)
    {
         $kk = \App\Apbdes::where('id',$id)->first();
        return view('layoutsadmin.apbdesedit',['kk' => $kk]);
    }
    public function update(Request $request, $post)
    {

        if ($request->hasFile('gambar')) {

            //upload new image
            $image = $request->file('gambar');
            $image->storeAs('public/apbdes', $image->hashName());

            //delete old image
            $kk = \App\Apbdes::where('id',$post)->first();
            Storage::delete('public/apbdes/'.$kk->foto);
            //update post with new image
            DB::table('apbdes')->where('id',$request->id)->update([
            'gambar'   => $image->hashName(),
            'judul'   => $request->judul,
            'isi' => $request->isi
            ]);
            

        } else {
            DB::table('apbdes')->where('id',$request->id)->update([
            'judul' => $request->judul,
            'isi' => $request->isi
            ]);
           
        }
         return redirect('/apbdes')->with('sukses','Data berhasil diinput');
    }
    public function delete($id)
    {
        $pendidikan = \App\Apbdes::find($id);
        $pendidikan->delete();
        return redirect('/apbdes')->with('sukses','Data berhasil Hapus');
    }
}
