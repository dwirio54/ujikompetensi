@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Barang</li>
            <li class="breadcrumb-item active" aria-current="page">Edit Stock Barang</li>
        </ol>
    </nav>
    <div class="card border-0">
        <div class="card-body">
            <form action="{{route('master-barang.update', $barangs->id)}}" method="post">
                @method('PATCH')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kode_barang">Nomor Refrensi</label>
                            <input type="text" name="kode_barang" id="kode_barang" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" name="nama_barang" id="nama_barang" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kategori_id">Kategori</label>
                            <select name="kategori_id" id="kategori_id" class="form-control">
                            @foreach ($kategoris as $kategori)
                                <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="brand_id">Brand</label>
                            <select name="brand_id" id="brand_id" class="form-control">
                            @foreach ($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->nama_brand}}</option>
                            @endforeach                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="uom_id">UOM</label>
                            <select name="uom_id" id="uom_id" class="form-control">
                            @foreach ($uoms as $uom)
                                <option value="{{$uom->id}}">{{$uom->nama_uom}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" id="harga" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Image">Image</label>
                            <input type="file" name="Image" id="Image" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" id="status" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="stock">Jumlah Stock</label>
                            <input type="text" name="stock" id="stock" class="form-control">
                        </div>
                    </div>
                    <div class="ml-3">
                        <button class="btn btn-outline-info">Simpan Stock</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
