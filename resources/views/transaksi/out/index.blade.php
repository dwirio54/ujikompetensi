@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Transaksi</li>
            <li class="breadcrumb-item active" aria-current="page">Barang Keluar</li>
        </ol>
    </nav>
    <div class="card border-0">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Refrensi</th>
                        <th>Supplier</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($transaksi as $trans)
                        <td>{{$trans->req->kode_request}}</td>
                        <td>{{$trans->barang->kode_barang}}</td>
                        <td>{{$trans->jumlah_permintaan}}</td>
                        <td>{{$trans->status}}</td>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
