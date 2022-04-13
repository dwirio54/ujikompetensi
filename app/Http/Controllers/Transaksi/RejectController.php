<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaksi;

class RejectController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with('brand','barang')->where('status','rejected')->paginate(5);

        return view('transaksi.reject.index', compact('transaksi'));
    }
}
