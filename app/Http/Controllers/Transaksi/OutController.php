<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaksi;

class OutController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with('brand','barang')->where('status','accept')->paginate(5);

        return view('transaksi.out.index', compact('transaksi'));
    }
}
