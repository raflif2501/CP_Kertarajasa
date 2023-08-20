@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Berita
                            <a href="{{ route('berita.create') }}" type="button" class="btn btn-success"
                                style="float: right">Tambah
                                Berita</a>
                        </h3>
                    </div>
                    <div class="card-header">
                        <form action="/cariberitaa" method="GET" style="float: right">
                            <input type="text" name="cari" placeholder="Cari Berita ..." value="{{ old('cari') }}">
                            <input type="submit" value="CARI">
                        </form>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-full-width table-responsive">
                        <table id="example1" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Isi</th>
                                    <th>Gambar 1</th>
                                    <th>Gambar 2</th>
                                    <th>Gambar 3</th>
                                    <th>Gambar 4</th>
                                    <th>Gambar 5</th>
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
                                    $th = substr($judul, 0, 25) . '......';
                                    return $th;
                                }
                            @endphp
                            <tbody>
                                @foreach ($data as $p)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $p->judul }}</td>
                                        <td>{{ $p->tanggal }}</td>
                                        <td>{!! st($p->isi) !!}</td>
                                        <td><img src="{{ asset('foto/berita/gambar1') }}/{{ $p->gambar }}"
                                                alt="{{ $p->judul }}" style="max-width:100px;max-height:100px;"></td>
                                        @if ($p->gambar2 != null)
                                            <td><img src="{{ asset('foto/berita/gambar2') }}/{{ $p->gambar2 }}"
                                                    alt="{{ $p->judul }}" style="max-width:100px;max-height:100px;">
                                            </td>
                                        @else
                                            <td></td>
                                        @endif
                                        @if ($p->gambar3 != null)
                                            <td><img src="{{ asset('foto/berita/gambar3') }}/{{ $p->gambar3 }}"
                                                    alt="{{ $p->judul }}" style="max-width:100px;max-height:100px;">
                                            </td>
                                        @else
                                            <td></td>
                                        @endif
                                        @if ($p->gambar4 != null)
                                            <td><img src="{{ asset('foto/berita/gambar4') }}/{{ $p->gambar4 }}"
                                                    alt="{{ $p->judul }}" style="max-width:100px;max-height:100px;">
                                            </td>
                                        @else
                                            <td></td>
                                        @endif
                                        @if ($p->gambar5 != null)
                                            <td><img src="{{ asset('foto/berita/gambar5') }}/{{ $p->gambar5 }}"
                                                    alt="{{ $p->judul }}" style="max-width:100px;max-height:100px;">
                                            </td>
                                        @else
                                            <td></td>
                                        @endif
                                        <td>
                                            <a href="{{ route('berita.edit', $p->id) }}"
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
    @include('berita.scriptDelete')
@endsection
