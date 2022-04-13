<?php

namespace App\Http\Controllers\Suplier;

use App\Suplier;
use App\Barang;
use App\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuplierController extends Controller
{
    public function index()
    {
        $supliers = Barang::all();
        $barang = Barang::sum('stock');
        $menunggu = Transaksi::where('status', 'menunggu')->get();
        $penerimaan = Transaksi::where('status', 'penerimaan')->get();
        $penolakan = Transaksi::where('status', 'penolakan')->get();

        return view('suplier.index', compact('supliers', 'barang', 'menunggu', 'penerimaan', 'penolakan'));
    }
}
