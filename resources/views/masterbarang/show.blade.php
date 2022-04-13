@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Barang</li>
            <li class="breadcrumb-item active" aria-current="page">Tampilkan Stock</li>
        </ol>
    </nav>
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-header border-0 bg-white">
                <img src="{{url('storage/'. $barang->image)}}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Kategori</th>
                                    <th>Brand</th>
                                    <th>UOM</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$barang->kode_barang}}</td>
                                    <td>{{$barang->nama_barang}}</td>
                                    <td>{{$barang->nama_brand}}</td>
                                    <td>{{$barang->nama_uom}}</td>
                                    <td>{{$barang->harga}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
