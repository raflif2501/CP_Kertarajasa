@extends('layouts.usersapp')

@section('contentuser')
    <main id="main">
        <!-- Detail -->
        <section class="berita" id="berita" data-aos="fade-up" style="background-color: #2B2A4C">
            <div class="mt-5 mb-5 container" data-aos="fade-up">
                <div class="section-header">
                    <h2 style="color: white">BERITA</h2>
                    <div style="float: right">
                        <form action="/cariberita" method="GET">
                            <input type="text" name="cari" placeholder="Cari Berita ..." value="{{ old('cari') }}">
                            <input type="submit" value="CARI">
                        </form>
                    </div>
                </div>
                <div class="position-relative h-100">
                    <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
                            @php
                                function isib($judul)
                                {
                                    $isi = substr($judul, 60, 45) . '...';
                                    return $isi;
                                }
                            @endphp
                            @php
                                function judul($judul)
                                {
                                    $isi = substr($judul, 0, 40) . '...';
                                    return $isi;
                                }
                            @endphp
                            @foreach ($data as $q)
                                <div class="mb-3 swiper-slide" style="padding: 20px">
                                    <div class="data-berita-wrap">
                                        <div class="data-berita-item">
                                            <a href="/detail/{{ $q->id }}" class="details-link" title="More Details">
                                                <img src="{{ asset('foto/berita/gambar1') }}/{{ $q->gambar }}"
                                                    class="img-fluid" alt="" width="100%"
                                                    style="border-radius: 15px 15px 15px 15px; border: 5px solid #EEE2DE;">
                                                <p>{{ judul($q->judul) }}</p>
                                                <i class="bx bx-link"></i>
                                            </a>
                                            <p>{!! isib($q->isi) !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    </main>
@endsection
