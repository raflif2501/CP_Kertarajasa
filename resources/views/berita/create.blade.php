@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Berita</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('berita.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Judul Berita</label>
                                <input type="text" name="judul"
                                    class="form-control @error('judul') is-invalid @enderror"
                                    placeholder="Masukkan Judul berita" value="{{ old('judul') }}">
                                @error('judul')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal"
                                    class="form-control @error('tanggal') is-invalid @enderror"
                                    placeholder="Masukkan Tanggal Berita" value="{{ old('tanggal') }}">
                                @error('tanggal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 1</label>
                                <input type="file" name="gambar"
                                    class="form-control @error('gambar') is-invalid @enderror"
                                    placeholder="Masukkan Gambar 1" value="{{ old('gambar') }}">
                                @error('gambar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 2</label>
                                <input type="file" name="gambar2"
                                    class="form-control @error('gambar2') is-invalid @enderror"
                                    placeholder="Masukkan Gambar 2" value="{{ old('gambar2') }}">
                                @error('gambar2')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 3</label>
                                <input type="file" name="gambar3"
                                    class="form-control @error('gambar3') is-invalid @enderror"
                                    placeholder="Masukkan Gambar 3" value="{{ old('gambar3') }}">
                                @error('gambar3')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 4</label>
                                <input type="file" name="gambar4"
                                    class="form-control @error('gambar4') is-invalid @enderror"
                                    placeholder="Masukkan Gambar 4" value="{{ old('gambar4') }}">
                                @error('gambar4')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gambar 5</label>
                                <input type="file" name="gambar5"
                                    class="form-control @error('gambar5') is-invalid @enderror"
                                    placeholder="Masukkan Gambar 5" value="{{ old('gambar5') }}">
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
                                <label>Isi Berita</label>
                                <input id="isi" type="hidden" name="isi"
                                    class="form-control @error('isi') is-invalid @enderror" value="{{ old('isi') }}">
                                <trix-editor input="isi" placeholder="Masukkan Isi Berita"></trix-editor>
                                @error('isi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('berita.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
