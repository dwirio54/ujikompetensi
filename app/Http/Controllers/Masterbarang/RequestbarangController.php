<?php

namespace App\Http\Controllers\Masterbarang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Req;
use App\Transaksi;
use App\Barang;
use App\Brand;
use App\Kategori;
use App\Uom;


class RequestbarangController extends Controller
{
    
    public function edit($id)
    {
        $barangs = Barang::findOrFail($id);
        $kategoris = Kategori::all();
        $uoms = Uom::all();
        $brands = Brand::all();

        return view('masterbarang.request.edit', compact('barangs','kategoris', 'uoms', 'brands'));
    }
    
    
    
    public function store(Request $request, $id)
    {
        $user = $request::findOrFail(auth()->user()->id);
        $req = REQ::where('id', '=', $id)->get();

        $req = REQ::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telp' => $request->telp,
        ]);
        
        if ($req->save()) {
            $transaksi = Transaksi::create([
                'user_id' => $user->id,
                'request_id' => $req->id,
                'barang_id' => $request->$barang_id,
                'jumlah_permintaan' => $request->jumlah_permintaan,
                'status' => 'menunggu'
            ]);
        }

       flash()->success('Berhasil Buat Permintaan');
       return view('masterbarang.request.edit');
    }
}
