@extends('layouts.app')

@section('content')
    <div class="container" style="width: 750px">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <p class="mt-3">Cari Laporan Reject</p>
                        <form action="{{route('cetak.reject')}}" method="get">
                            @csrf
                                <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="date" name="awal" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="date" name="akhir" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <button type="submit" class="btn btn-outline-secondary btn-sm mr-3">Cari Laporan</button>
                            </div>
                            </form>

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
                                @foreach ($transaksi as $trans)
                                <tr>
                                    <td>{{$trans->req->kode_request}}</td>
                                    <td>{{$trans->barang->kode_barang}}</td>  
                                    <td>{{$trans->jumlah_permintaan}}</td>
                                    <td>{{$trans->status}}</td>
                                    <td>{{$trans->created_at->format('d-m-Y')}}</td>
                                </tr>
                                
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection