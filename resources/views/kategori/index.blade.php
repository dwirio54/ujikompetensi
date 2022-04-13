@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Data</li>
            <li class="breadcrumb-item active" aria-current="page">Kategori</li>
        </ol>
    </nav>
    @role('gudang')
    <div class="row">
        <div class="col-md-4">
            <div class="card border-0">
                <div class="card-body">
                    <form action="{{route('kategori.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama_kategori">Nama Kategori</label>
                            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control">
                        </div>
                        <button class="btn btn-outline-info">Simpan Kategori</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode Kategori</th>
                                <th>Nama Kategori</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($kategoris as $kategori)
                            <tr>
                                <td>{{$kategori->kode_kategori}}</td>
                                <td>{{$kategori->nama_kategori}}</td>
                                <td>
                                    <form action="{{route('kategori.delete', $kategori->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('kategori.edit', $kategori->id)}}" class="btn btn-outline-warning btn-sm">Edit Kategori</a>
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Hapus Kategori</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endrole

    @role('pimpinan')
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Kategori</th>
                                    <th>Nama Kategori</th>
                                </tr>
                            </thead>
                            @foreach($kategoris as $kategori)
                            <tbody>
                                <tr>
                                    <td>{{$kategori->kode_kategori}}</td>
                                    <td>{{$kategori->nama_kategori}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endrole
</div>

@endsection
