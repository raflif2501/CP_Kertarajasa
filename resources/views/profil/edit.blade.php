@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Data Profil</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('profil.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Judul Profil</label>
                                <input type="text" name="judul"
                                    class="form-control @error('judul') is-invalid @enderror"
                                    placeholder="Masukkan Judul Profil" value="{{ old('judul', $data->judul) }}"">
                                @error('judul')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
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
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Isi Profil</label>
                                <input id="isi" type="hidden" name="isi"
                                    class="form-control @error('isi') is-invalid @enderror"
                                    value="{{ old('isi', $data->isi) }}">
                                <trix-editor input="isi" placeholder="Masukkan Isi Profil"></trix-editor>
                                @error('isi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('profil.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
