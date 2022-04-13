<?php

namespace App\Http\Controllers\Brand;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {

        $brands = Brand::all();


        return view('brand.index', compact('brands'));

    }
    public function edit($id)
    {
        $brands = Brand::findOrFail($id);
        return view('brand.edit', compact('brands'));
    }

    public function store(Request $request)
    {
        $brands = Brand::create([
            'nama_brand' => $request -> nama_brand,
            'kode_brand' => $request -> kode_brand
        ]);

        flash()->success('Brand Baru berhasil di buat');

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $brands = Brand::where('id', $id)->first();
        $brands->nama_brand = $request->input('nama_brand');
        $brands->save();
        
        flash()->success('Kategori berhasil di ubah');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        flash()->success('Brand berhasil di hapus');
        return redirect()->back();
    }
}
