@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Kontak
                            <a href="{{ route('kontak.create') }}" type="button" class="btn btn-success"
                                style="float: right">Tambah
                                Kontak</a>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-full-width table-responsive">
                        <table id="example1" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Akun</th>
                                    <th>Nama Akun</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($data as $p)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $p->jenis }}</td>
                                        <td>{{ $p->isi }}</td>
                                        <td>{{ $p->alamat }}</td>
                                        <td>
                                            <a href="{{ route('kontak.edit', $p->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>&ensp;
                                            <input type="button" class="btn btn-sm btn-danger"
                                                data-id="{{ $p->id }}" onclick="deleteData(this)" value="Delete">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    @include('kontak.scriptDelete')
@endsection
