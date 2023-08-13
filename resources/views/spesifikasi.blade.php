@extends('layouts.usersapp')

@section('contentuser')
    <main id="main">
        <section class="detail" id="detail" data-aos="fade-up" style="background-color: #1101AD">
            <div class="container">
                <div class="section-header">
                    <br>
                    <h3>{{ $data->nama }}</h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-karya mb-3">
                            <center>
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('foto/produk/gambar1') }}/{{ $data->gambar }}"
                                                class="img-fluid" alt="" width="30%">
                                        </div>
                                        @if ($data->gambar2 != null)
                                            <div class="carousel-item">
                                                <img src="{{ asset('foto/produk/gambar2') }}/{{ $data->gambar2 }}"
                                                    class="img-fluid" alt="" width="30%">
                                            </div>
                                        @endif
                                        @if ($data->gambar3 != null)
                                            <div class="carousel-item">
                                                <img src="{{ asset('foto/produk/gambar3') }}/{{ $data->gambar3 }}"
                                                    class="img-fluid" alt="" width="30%">
                                            </div>
                                        @endif
                                        @if ($data->gambar4 != null)
                                            <div class="carousel-item">
                                                <img src="{{ asset('foto/produk/gambar4') }}/{{ $data->gambar4 }}"
                                                    class="img-fluid" alt="" width="30%">
                                            </div>
                                        @endif
                                        @if ($data->gambar5 != null)
                                            <div class="carousel-item">
                                                <img src="{{ asset('foto/produk/gambar5') }}/{{ $data->gambar5 }}"
                                                    class="img-fluid" alt="" width="30%">
                                            </div>
                                        @endif
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </center>
                            <div style="text-align: justify; color:white">
                                <p> {!! $data->deskripsi !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
