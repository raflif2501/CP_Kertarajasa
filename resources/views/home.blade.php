@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-3">
                <div class="card bg-danger">
                    <div class="card-header ">
                        <h4 class="card-title">Produk</h4>
                    </div>
                    <center>
                        <div class="card-header ">
                            <h2 class="card-title">{{ $produk }}</h2>
                            <br>
                        </div>
                    </center>
                    <div>
                        <a href="{{ route('produk.index') }}" style="float: right">More Info &ensp;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning">
                    <div class="card-header ">
                        <h4 class="card-title">Berita</h4>
                    </div>
                    <center>
                        <div class="card-header ">
                            <h2 class="card-title">{{ $berita }}</h2>
                            <br>
                        </div>
                    </center>
                    <div>
                        <a href="{{ route('berita.index') }}" style="float: right">More Info &ensp;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success">
                    <div class="card-header ">
                        <h4 class="card-title">Kontak</h4>
                    </div>
                    <center>
                        <div class="card-header ">
                            <h2 class="card-title">{{ $kontak }}</h2>
                            <br>
                        </div>
                    </center>
                    <div>
                        <a href="{{ route('kontak.index') }}" style="float: right">More Info &ensp;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-primary">
                    <div class="card-header ">
                        <h4 class="card-title">User</h4>
                    </div>
                    <center>
                        <div class="card-header ">
                            <h2 class="card-title">{{ $user }}</h2>
                            <br>
                        </div>
                    </center>
                    <div>
                        <a href="{{ route('users.index') }}" style="float: right">More Info &ensp;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
