<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaksi;
use App\REQ;

class InController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::where('status','waiting')->with('barang','req')->paginate(5);
        
        return view('transaksi.in.index', compact('transaksi'));
    }
}
