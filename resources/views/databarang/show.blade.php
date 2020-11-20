@extends('main')

@section('title')
    Menampilkan Data Barang
@endsection
@section('content')

@foreach($data as $index => $isi)
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Barang |</strong>
                            <a href="{{ route('data.index') }}">Kembali ke halaman sebelumnya</a>
                        </div>
                        <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Deskripsi</th>
                        <th>Stok</th>
                        <th>Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $index => $isi)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $isi->id_19103112 }}</td>
                            <td>{{ $isi->nama_19103112 }}</td>
                            <td>{{ $isi->deskripsi_19103112 }}</td>
                            <td>{{ $isi->stok_19103112 }}</td>
                            <td>Rp. {{ $isi->harga_19103112 }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
@endforeach
@endsection