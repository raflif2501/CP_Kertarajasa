@extends('layouts.usersapp')

@section('contentuser')
    <main id="main">
        <!-- Beranda -->
        <section class="beranda" style="background-color: #1101AD">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-in"
                        data-aos-delay="200">
                        <br><br>
                        <img src="https://kertarajasa.co.id/wp-content/uploads/2013/04/KRR.jpg" class="d-block w-100"
                            alt="..." style="border-radius: 15px 15px 15px 15px;" class="img-fluid animated">
                    </div>
                    <div class="col-lg-4 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-in">
                        <div style="text-align: right; color:white">
                            <br><br>
                            <h4>The Biggest Capacity</h4>
                            <br>
                            <h4>Responsible Corporate</h4>
                            <br>
                            <h4>Quality Assurance</h4>
                            <br>
                            <h4>Solid Team</h4>
                            <br>
                            <h4>Over 25 Years Experience</h4>
                        </div>
                    </div>
                </div>
                <br><br><br>
            </div>
        </section>
        <!-- About -->
        <section class="about" id="about" data-aos="fade-up" style="background-color:#1101AD">
            <br><br><br><br>
            {{-- <section id="cliens" class="cliens section-bg">
                <div class="container">
                    <br>
                </div>
            </section> --}}
            <div class="container">
                <div class="section-header">
                    <h1>ABOUT</h1>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <center>
                            <img src="{{ asset('loginn') }}/images/logo_.png" alt="" width="50%">
                        </center>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <p style="text-align: justify; text-indent: 0.5in;">PT Kerta Rajasa Raya is located at East Java
                            of Indonesia. From beginning our company is
                            integrated manufacture of Woven Bag and Jumbo Bag from raw material to finish bag. Our
                            initial product line during that time was only Woven Bag and follow by FIBC/Jumbo Bag
                            production started on 1983. With the company development and highly comitted management, we
                            started to expand and export our bags to Japan and Singapore in 1985. In the same year PT
                            Kerta Rajasa Raya become the most fast growing company and lead the market in the
                            industries.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p style="text-align: justify; text-indent: 0.5in;">
                            Even with more than 20 years experience in the field, we keep listening to our customer
                            need, developing and expanding our range of product to fulfill the demanding need. From year
                            1985-2008, PT Kerta Rajasa Raya has numerous investment of new technology to fulfill the
                            demand of high quality product, more range of end product and production optimization.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p style="text-align: justify; text-indent: 0.5in;">
                            In order to fulfill the need of expanding the range of product and demand, in year 2009 we
                            investing on the latest integrated line of the world famous ad*starKON technology from
                            austria to produce Multi Purpose Block Bottom Valve bag namely AD*STAR* bag.
                            Currently our company has the biggest
                            production capacity for Block Bottom Bag in South East
                            Asia and our Trade Mark is “STARPAK”</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Produk -->
        <section class="produk" id="produk" data-aos="zoom-out" style="background-color: #1101AD">
            <br><br><br><br><br>
            {{-- <section id="cliens" class="cliens section-bg">
                <div class="container">
                    <br>
                </div>
            </section> --}}
            <div class="container">
                <div class="section-header">
                    <h1>PRODUK</h1>
                </div>
                <div class="row">
                    @foreach ($produk as $r)
                        <div class="col-md-4">
                            <div class="card-produk mb-3 text-center">
                                <a href="/spesifikasi/{{ $r->id }}" class="details-link" title="More Details">
                                    <img src="{{ asset('foto/produk/gambar1') }}/{{ $r->gambar }}" class="img-fluid"
                                        alt="">
                                    <h4>{{ $r->nama }}</h4>
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Berita -->
        <section class="berita" id="berita" data-aos="zoom-in" style="background-color: #1101AD">
            <br><br><br><br>
            {{-- <section id="cliens" class="cliens section-bg">
                <div class="container">
                </div>
            </section> --}}
            <div class="container">
                <div class="section-header">
                    <h1>BERITA</h1>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        @foreach ($berita1 as $q)
                            <div class="card-berita mb-3">
                                <img src="{{ asset('foto/berita/gambar1') }}/{{ $q->gambar }}" class="img-fluid"
                                    alt="" width="100%">
                                <a href="/detail/{{ $q->id }}" class="details-link" title="More Details">
                                    <h4>{{ $q->judul }}</h4>
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-3">
                        @foreach ($berita as $q)
                            <div class="card-berita mb-3">
                                <img src="{{ asset('foto/berita/gambar1') }}/{{ $q->gambar }}" class="img-fluid"
                                    alt="">
                                <a href="/detail/{{ $q->id }}" class="details-link" title="More Details">
                                    <h6>{{ $q->judul }}</h6>
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        @endforeach
                        <div class="mt-4 text-center">
                            <a href="/allberita">Lihat lainnya <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </section>
    </main>
@endsection
