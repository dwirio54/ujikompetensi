<?php

namespace App\Http\Controllers\Uom;

use App\Uom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UomController extends Controller
{
    public function index()
    {

        $uoms = Uom::all();


        return view('uom.index', compact('uoms'));

    }

    public function edit($id)
    {
        $uoms = Uom::findOrFail($id);
        return view('uom.edit', compact('uoms'));
    }

    public function store(Request $request)
    {
        $uoms = Uom::create([
            'nama_uom' => $request -> nama_uom,
            'kode_uom' => $request -> kode_uom,
        ]);

        flash()->success('Satuan Baru berhasil di buat');

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $uoms = Uom::where('id', $id)->first();
        $uoms->nama_uom = $request->input('nama_uom');
        $uoms->save();
        
        flash()->success('Satuan berhasil di ubah');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $uoms = Uom::findOrFail($id);
        $uoms->delete();

        flash()->success('Satuan berhasil di hapus');
        return redirect()->back();
    }
}
