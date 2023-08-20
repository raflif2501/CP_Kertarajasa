@extends('daniel.app')

@section('contentuser')
    <main id="main">
        <!-- Detail -->
        <section class="detail" id="detail" data-aos="fade-up">
            <div class="container">
                <div class="section-header">
                    <br>
                    <h3>{{ $data->judul }}</h3>
                </div>
                @php
                    function isi1($judul)
                    {
                        $panjang = strlen($judul);
                        $bagi = $panjang / 2;
                        $hasil = substr($judul, 0, $bagi);
                        return $hasil;
                    }
                @endphp
                @php
                    function isi2($judul)
                    {
                        $panjang = strlen($judul);
                        $bagi = $panjang / 2;
                        $hasil1 = substr($judul, 0, $bagi);
                        $hasil2 = substr($judul, $bagi);
                        return $hasil2;
                    }
                @endphp
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-karya mb-3">
                            <center>
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('foto/berita/gambar1') }}/{{ $data->gambar }}"
                                                class="img-fluid" alt="" width="70%"
                                                style="border-radius: 15px 15px 15px 15px;">
                                        </div>
                                        @if ($data->gambar2 != null)
                                            <div class="carousel-item">
                                                <img src="{{ asset('foto/berita/gambar2') }}/{{ $data->gambar2 }}"
                                                    class="img-fluid" alt="" width="70%"
                                                    style="border-radius: 15px 15px 15px 15px;">
                                            </div>
                                        @endif
                                        @if ($data->gambar3 != null)
                                            <div class="carousel-item">
                                                <img src="{{ asset('foto/berita/gambar3') }}/{{ $data->gambar3 }}"
                                                    class="img-fluid" alt="" width="70%"
                                                    style="border-radius: 15px 15px 15px 15px;">
                                            </div>
                                        @endif
                                        @if ($data->gambar4 != null)
                                            <div class="carousel-item">
                                                <img src="{{ asset('foto/berita/gambar4') }}/{{ $data->gambar4 }}"
                                                    class="img-fluid" alt="" width="70%"
                                                    style="border-radius: 15px 15px 15px 15px;">
                                            </div>
                                        @endif
                                        @if ($data->gambar5 != null)
                                            <div class="carousel-item">
                                                <img src="{{ asset('foto/berita/gambar5') }}/{{ $data->gambar5 }}"
                                                    class="img-fluid" alt="" width="70%"
                                                    style="border-radius: 15px 15px 15px 15px;">
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
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="isi">
                        <div style="text-align: justify; color:white">
                            <p> {!! isi1($data->isi) !!}</p>
                        </div>
                    </div>
                    <div class="isi">
                        <div style="text-align: justify; color:white">
                            <p> {!! isi2($data->isi) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
