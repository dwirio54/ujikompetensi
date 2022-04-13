<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use Illuminate\Support\Facades\Auth;
class AcceptedController extends Controller
{
    public function index()
   {
     $transaksi = Transaksi::where(['user_id' => Auth::user()->id, 'status'=> 'accept'])->paginate(5);

       return view('list.accept', compact('transaksi'));
   }
}
