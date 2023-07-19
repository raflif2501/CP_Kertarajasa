@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Profil
                            <a href="{{ route('profil.create') }}" type="button" class="btn btn-success"
                                style="float: right">Tambah
                                Profil</a>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-full-width table-responsive">
                        <table id="example1" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            @php
                                function str($rupiah)
                                {
                                    $rp = 'Rp ' . number_format($rupiah, 2, ',', '.');
                                    return $rp;
                                }
                            @endphp
                            @php
                                $no = 1;
                                function st($judul)
                                {
                                    $th = substr($judul, 0, 50) . '......';
                                    return $th;
                                }
                            @endphp
                            <tbody>
                                @foreach ($data as $p)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $p->judul }}</td>
                                        <td>{!! st($p->isi) !!}</td>
                                        <td><img src="{{ asset('foto/profil/gambar1') }}/{{ $p->gambar }}"
                                                alt="{{ $p->judul }}" style="max-width:250px;max-height:250px;"></td>
                                        <td>
                                            <a href="{{ route('profil.edit', $p->id) }}"
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
    @include('profil.scriptDelete')
@endsection
