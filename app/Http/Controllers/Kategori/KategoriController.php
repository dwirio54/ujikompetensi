<?php

namespace App\Http\Controllers\Kategori;

use App\Barang;
use App\Uom;
use App\Brand;
use App\Transaksi;
use App\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function index()
    {

        $kategoris = Kategori::all();
        return view('kategori.index', compact('kategoris'));

    }
    public function edit($id)
    {
        $kategoris = Kategori::findOrFail($id);
        return view('kategori.edit', compact('kategoris'));
    }

    public function update(Request $request, $id)
    {
        $kategoris = Kategori::where('id', $id)->first();
        $kategoris->nama_kategori = $request->input('nama_kategori');
        $kategoris->save();
        
        flash()->success('Kategori berhasil di ubah');

        return redirect()->back();
    }

        public function store(Request $request)
        {
            $kategori = Kategori::create([
                'nama_kategori' => $request -> nama_kategori,
                'kode_kategori' => $request -> kode_kategori
            ]);

            flash()->success('Kategori Baru berhasil di buat');

            return redirect()->back();
        }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        flash()->success('Kategori berhasil di hapus');
        return redirect()->back();
    }
}
