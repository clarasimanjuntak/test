<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// panggil model buku
use App\Buku;
use App\Buku\edit;

class BukuController extends Controller
{
    public function index(){
    // mengambil data  buku
    $data_buku = Buku::all();

    // mengirim data buku ke view buku
    return view('buku', ['buku' => $data_buku]);
    }

    public function create()
    {
        return view('create');
      // return 'create data mahasiswa';
    }

    public function store(Request $request)
    { 
        
        $buku = new Buku;
        $buku -> id = $request -> id;
        $buku -> judul = $request-> judul;
        $buku -> penulis = $request-> penulis;
        $buku -> penerbit = $request-> penerbit;

        $buku->save();

        return redirect('/buku')->with('status', 'Data Buku Berhasil Ditambahkan!');

        


       /* $this ->validate($request, [
            'id' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required'
        ]);

        Buku::create([
            'id' => $request -> id,
            'judul' => $request -> judul,
            'penulis' => $request -> penulis,
            'penerbit' => $request -> penerbit
        ]);
        return redirect('/buku')->with('status', 'Data Buku Berhasil Ditambahkan!');
        */
    }

    public function show(Buku $buku)
    {
        return view('buku.show', compact($buku));
    }

    public function edit(Buku $buku)
    {
       return view('/edit', compact('buku'));
    }

    public function update(Request $request, Buku $buku)
    {
        Buku::where('id', $buku->id)
            ->update([
                'id' => $request->id,
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit

            ]);
        return redirect('/buku')->with('status', 'Data Buku Berhasil Di Update !');
        /*
        $this -> validate($request, [
            'id' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required'
        ]);

        $buku = Buku::find($id);
        $buku  -> id = $request -> id;
        $buku -> judul = $request -> judul;
        $buku -> penulis = $request -> penulis;
        $buku -> penerbit = $request -> penerbit;
        $buku -> save();
        return redirect('/buku'); 
        */
    }

    public function destroy($id)
    {
        Buku::destroy($id);
        return redirect('/buku') ->with('status', 'Data Buku berhasil dihapus');

    }


}
