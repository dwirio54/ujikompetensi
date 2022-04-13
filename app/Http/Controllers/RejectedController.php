<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use Illuminate\Support\Facades\Auth;
class RejectedController extends Controller
{
    public function index()
   {
     $transaksi = Transaksi::where(['status'=> 'rejected'], ['user_id' => Auth::user()->id])->get();

       return view('list.reject', compact('transaksi'));
   }
}
