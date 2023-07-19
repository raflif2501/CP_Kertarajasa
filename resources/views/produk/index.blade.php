@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Produk
                            <a href="{{ route('produk.create') }}" type="button" class="btn btn-success"
                                style="float: right">Tambah
                                Produk</a>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-full-width table-responsive">
                        <table id="example1" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    {{-- <th>Harga</th> --}}
                                    <th>Deskripsi</th>
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
                                        <td>{{ $p->nama }}</td>
                                        {{-- <td>{{ str($p->harga) }}</td> --}}
                                        <td>{!! st($p->deskripsi) !!}</td>
                                        <td><img src="{{ asset('foto/produk/gambar1') }}/{{ $p->gambar }}"
                                                alt="{{ $p->nama }}" style="max-width:100px;max-height:100px;"></td>
                                        @if ($p->gambar2 != null)
                                            <td><img src="{{ asset('foto/produk/gambar2') }}/{{ $p->gambar2 }}"
                                                    alt="{{ $p->nama }}" style="max-width:100px;max-height:100px;">
                                            </td>
                                        @else
                                            <td></td>
                                        @endif
                                        @if ($p->gambar3 != null)
                                            <td><img src="{{ asset('foto/produk/gambar3') }}/{{ $p->gambar3 }}"
                                                    alt="{{ $p->nama }}" style="max-width:100px;max-height:100px;">
                                            </td>
                                        @else
                                            <td></td>
                                        @endif
                                        @if ($p->gambar4 != null)
                                            <td><img src="{{ asset('foto/produk/gambar4') }}/{{ $p->gambar4 }}"
                                                    alt="{{ $p->nama }}" style="max-width:100px;max-height:100px;">
                                            </td>
                                        @else
                                            <td></td>
                                        @endif
                                        @if ($p->gambar5 != null)
                                            <td><img src="{{ asset('foto/produk/gambar5') }}/{{ $p->gambar5 }}"
                                                    alt="{{ $p->nama }}" style="max-width:100px;max-height:100px;">
                                            </td>
                                        @else
                                            <td></td>
                                        @endif
                                        <td>
                                            <a href="{{ route('produk.edit', $p->id) }}"
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
    @include('produk.scriptDelete')
@endsection
