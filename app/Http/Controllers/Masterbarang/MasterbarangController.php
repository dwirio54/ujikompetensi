<?php

namespace App\Http\Controllers\Masterbarang;

use App\Barang;
use App\Brand;
use App\Uom;
use App\Kategori;
use App\Transaksi;
use App\Suplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterbarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::with('kategori', 'brand', 'uom')->get();
    

        return view('masterbarang.index', compact('barangs'));
    }

     public function create()
    {
        $barangs = Barang::all();
        $kategoris = Kategori::all();
        $uoms = Uom::all();
        $brands = Brand::all();

        return view('masterbarang.create', compact('barangs','kategoris', 'uoms', 'brands'));
    }

    public function edit($id)
    {
        $barangs = Barang::findOrFail($id);
        $kategoris = Kategori::all();
        $uoms = Uom::all();
        $brands = Brand::all();

        return view('masterbarang.edit', compact('barangs','kategoris', 'uoms', 'brands'));
    }

    public function show()
    {
        $barangs = Barang::findOrFail($id);
        $items = Barang::where('id', '=', $id)->get();


        return view('masterbarang.show', compact('barangs', 'items'));
    }

    public function store(Request $request)
    {
        $barangs = Barang::create([
            'kode_barang' => $request -> kode_barang,
            'nama_barang' => $request -> nama_barang,
            'kategori_id' => $request -> kategori_id,
            'brand_id' => $request -> brand_id,
            'uom_id' => $request -> uom_id,
            'harga' => $request -> harga,
            'stock' => $request -> stock,
            'email' => $request -> email,
            'nama_suplier' => $request -> nama_suplier
        ]);

        flash()->success('Barang Baru berhasil di buat');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        flash()->success('Barang berhasil di hapus');
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $barangs = Barang::where('id', $id)->first();

        $barangs->kode_barang = $request->input('kode_barang');
        $barangs->nama_barang = $request->input('nama_barang');
        $barangs->kategori_id = $request->input('kategori_id');
        $barangs->brand_id = $request->input('brand_id');
        $barangs->uom_id = $request->input('uom_id');
        $barangs->harga = $request->input('harga');
        $barangs->email = $request->input('email');

        $barangs->save();

        flash()->success('Barang berhasil di ubah');

        return redirect()->back();
    }


    private function storeImage($barang){
        if (request()->has('image')){
            $barang->update([
                'Image' => request()->image->store('uploads', 'public'),
            ]);

            $image = Image::make(public_path('storage/' . $barang->iamge))->fit(300, 300, null, ' top-left');
            $image->save();
        }
    }
}
