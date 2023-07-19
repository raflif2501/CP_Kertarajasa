@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Data Kontak</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('kontak.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Jenis Akun</label>
                                <input type="text" name="jenis" class="form-control" placeholder="{{ $data->jenis }}"
                                    value="{{ $data->jenis }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Akun</label>
                                <input type="text" name="isi" class="form-control" placeholder="{{ $data->isi }}"
                                    value="{{ $data->isi }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Link Akun</label>
                                <input type="text" name="alamat" class="form-control" placeholder="{{ $data->alamat }}"
                                    value="{{ $data->alamat }}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('kontak.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
