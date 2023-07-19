@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Data Produk</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('produk.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror"
                                    placeholder="Masukkan Nama produk" value="{{ old('nama', $data->nama) }}"">
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>harga Produk</label>
                                <input type="text" name="harga"
                                    class="form-control @error('harga') is-invalid @enderror"
                                    placeholder="Masukkan Harga Produk" value="{{ old('harga', $data->harga) }}">
                                @error('harga')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 1</label>
                                <input type="file" name="gambar"
                                    class="form-control @error('gambar') is-invalid @enderror"
                                    placeholder="Masukkan Gambar 1" value="{{ old('gambar', $data->gambar) }}">
                                @error('gambar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 2</label>
                                <input type="file" name="gambar2"
                                    class="form-control @error('gambar2') is-invalid @enderror"
                                    placeholder="Masukkan Gambar 2" value="{{ old('gambar2', $data->gambar2) }}">
                                @error('gambar2')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 3</label>
                                <input type="file" name="gambar3"
                                    class="form-control @error('gambar3') is-invalid @enderror"
                                    placeholder="Masukkan Gambar 3" value="{{ old('gambar3', $data->gambar3) }}">
                                @error('gambar3')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 4</label>
                                <input type="file" name="gambar4"
                                    class="form-control @error('gambar4') is-invalid @enderror"
                                    placeholder="Masukkan Gambar 4" value="{{ old('gambar4', $data->gambar4) }}">
                                @error('gambar4')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 5</label>
                                <input type="file" name="gambar5"
                                    class="form-control @error('gambar5') is-invalid @enderror"
                                    placeholder="Masukkan Gambar 5" value="{{ old('gambar5', $data->gambar5) }}">
                                @error('gambar5')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input id="deskripsi" type="hidden" name="deskripsi"
                                    class="form-control @error('deskripsi') is-invalid @enderror"
                                    value="{{ old('deskripsi', $data->deskripsi) }}">
                                <trix-editor input="deskripsi" placeholder="Masukkan deskripsi Konten"></trix-editor>
                                @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('produk.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
