@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Barang</li>
            <li class="breadcrumb-item active" aria-current="page">Add Barang Baru</li>
        </ol>
    </nav>
    <div class="card border-0">
        <div class="card-body">
            <div class="alert alert-primary" role="alert">
                <h3>Perhatian !!!</h3>
                   Masukan semua informasi permintaan dibawah ini dengan lengkap dan benar.
            </div>
            <form action="{{route('master-barang.request.store', $barangs->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="nama" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Telp</label>
                            <input type="text" name="telp" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <h5 class="font-weight-bold">Detail Permintaan</h5>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <input type="text" name="" id="" class="form-control" value="{{$barangs->nama_barang}}" disabled>
                            <input type="hidden" name="barang_id" id="" class="form-control" value="{{$barangs->id}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Jumlah Stock</label>
                            <input type="text" name="" id="" class="form-control" value="{{$barangs->stock}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Jumlah Permintaan</label>
                            <input type="text" name="jumlah_permintaan" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div >
                    <button class="btn btn-outline-info">Buat Permintaan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
