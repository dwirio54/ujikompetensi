@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Barang</li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </nav>
    <div class="card border-0">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Stock</th>
                        <th>Tanggal Masuk</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($barangs as $barang)
                    <tr>
                        <td>{{$barang->kode_barang}}</td>
                        <td>{{$barang->nama_barang}}</td>
                        <td>{{$barang->stock}}</td>
                        <td>{{$barang->created_at->format('d-m-y')}}</td>
                        <td>
                            <form action="{{route('master-barang.delete', $barang->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                @role('gudang|pimpinan|customer')
                                <a href="{{route('master-barang.show', $barang->id)}}" class="btn btn-outline-secondary btn-sm">
                                    Tampilkan Stock
                                </a>
                                @endrole
                                @role('gudang')
                                <a href="{{route('master-barang.edit', $barang->id)}}" class="btn btn-outline-warning btn-sm">
                                    Update Stock
                                </a>
                                <button type="submit" class="btn btn-outline-danger btn-sm">Hapus Stock</button>
                                @endrole
                                @role('customer')
                                <a href="{{route('master-barang.request.store', $barang->id)}}" class="btn btn-outline-warning btn-sm">
                                    Buat Permintaan
                                </a>
                                @endrole
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
