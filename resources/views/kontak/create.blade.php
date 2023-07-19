@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Kontak</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                {{-- @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form action="{{ route('kontak.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Jenis Akun</label>
                                <input type="text" name="jenis"
                                    class="form-control @error('jenis') is-invalid @enderror"
                                    placeholder="Masukkan Jenis Akun" value="{{ old('jenis') }}">
                                @error('jenis')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Akun</label>
                                <input type="text" name="isi" class="form-control @error('isi') is-invalid @enderror"
                                    placeholder="Masukkan Nama AKun" value="{{ old('isi') }}">
                                @error('isi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Link Akun</label>
                                <input type="text" name="alamat"
                                    class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan alamat"
                                    value="{{ old('alamat') }}">
                                @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('kontak.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
