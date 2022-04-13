@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Data</li>
            <li class="breadcrumb-item active" aria-current="page">Edit Satuan</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('satuan.update', $uoms->id)}}" method="post">
                   @csrf
                   @method('PATCH')
                <div class="form-group">
                    <label for="nama_uom">Nama Satuan</label>
                    <input type="text" name="nama_uom" id="nama_uom" class="form-control">
                </div>
                <button class="btn btn-outline-info">Simpan Satuan</button>
            </form>
        </div>
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode Satuan</th>
                                <th>Nama</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$uoms->kode_uom}}</td>
                                <td>{{$uoms->nama_uom}}</td>
                                <td>
                                    <form action="{{route('satuan.delete', $uoms->id)}}" method="post">
                                        @csrf
                                        <a href="{{route('satuan.edit', $uoms->id)}}" class="btn btn-outline-warning btn-sm">Edit
                                            Satuan</a>
                                        <button class="btn btn-outline-danger btn-sm">Hapus Satuan</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
