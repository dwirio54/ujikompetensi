@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Cari Laporan</li>
            <li class="breadcrumb-item active" aria-current="page">Penerimaan</li>
        </ol>
    </nav>
    <div class="card border-0">
        <div class="card-body">
            <div class="alert alert-danger" role="alert">
                <a href="#" class="btn btn-outline-secondary btn-sn">Cari Laporan</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kode Request</th>
                        <th>Kode Barang</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transaksi as $trans)
                    <tr>
                        <td>{{$trans->req->kode_request}}</td>
                        <td>{{$trans->barang->kode_barang}}</td>
                        <td>{{$trans->jumlah_permintaan}}</td>
                        <td>{{$trans->status}}</td>
                        <td class="d-flex">
                           <a href="{{route('details.show', $trans->id)}}" class="btn btn-info-secondary btn-sm"></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
