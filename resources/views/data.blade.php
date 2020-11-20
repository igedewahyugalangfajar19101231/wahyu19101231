@extends('main')

@section('title')
    Halaman Data Kategori
@endsection
@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Kategori</strong>
                        </div>
                        <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $index => $isi)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $isi->ID }}</td>
                            <td>{{ $isi->Kategori }}</td>
                            <td>{{ $isi->Keterangan }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
     </div><!-- .animated -->
</div><!-- .content -->
@endsection