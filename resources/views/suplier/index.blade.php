@extends('layouts.app')

@section('content')
<div class="container mb-5" style="width: 750px;">
    <div class="row">
        @role('pemimpin')
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>Stock</h5>
                    </div>
                    <div>
                            <h3>
                                {{$barang}}
                            </h3>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>Waiting</h5>
                    </div>
                    <div>
                        <h3>
                            {{$menunggu->count()}}
                            </h3>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>Accepted</h5>
                    </div>
                    <div>
                            <h3>
                               {{$penerimaan->count()}}
                            </h3>
                    </div>
                </div>
                </div>
            </div>
        </div>  
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>Rejected</h5>
                    </div>
                    <div>
                            <h3>
                                {{$penolokan>count()}}
                            </h3>
                    </div>
                </div>
                </div>
            </div>
        </div>  
    </div>
</div>
</div>
@endrole  
@role('admingudang')
<div class="container mb-3" style="width: 800px">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>Stock Barang</h5>
                    </div>
                    <div>
                        <h3>{{$barang}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endrole    

    <div class="container" style="width: 900px">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Data Barang</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Suplier</th>
                                    <th>Nama Barang</th>
                                    <th>Phone</th>
                                    <th>Stock</th>

                                    @role('user')
                                    <th>Option</th>
                                    @endrole
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($supliers as $item)
                                <tr>
                                    <td>{{$item->kode_barang}}</td>
                                    <td>{{$item->nama_suplier}}</td>
                                    <td>{{$item->nama_barang}}</td>
                                    <td>{{$item->telp}}</td>
                                    <td>{{$item->stock}}</td>
                                    <td>  
                                            @role('user')
                                            <a href="{{route('master-barang.request', $item->id)}}" class="btn btn-warning btn-sm">
                                                Buat Permintaan
                                            </a>
                                            @endrole
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection