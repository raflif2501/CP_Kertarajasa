@extends('daniel.app')

@section('contentuser')
    <main id="main">
        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            <!-- Beranda -->
            <section class="home" id="scrollspyHeading1">
                <div class="container">
                    <div class="row">
                        @foreach ($home as $pr)
                            <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center"
                                data-aos="fade-right" data-aos-delay="200">
                                <br><br>
                                <img src="{{ asset('foto/profil/gambar1') }}/{{ $pr->gambar }}" class="d-block w-100"
                                    alt="..." style="border-radius: 15px 15px 15px 15px;" class="img-fluid animated">
                            </div>
                            <div class="col-lg-4 order-2 order-lg-1 d-flex flex-column justify-content-center"
                                data-aos="fade-right">
                                <div style="text-align: right; color:white">
                                    <br><br>
                                    <h3>{!! $pr->isi !!}</h3>
                                    {{-- <h4>The Biggest Capacity</h4>
                                    <br>
                                    <h4>Responsible Corporate</h4>
                                    <br>
                                    <h4>Quality Assurance</h4>
                                    <br>
                                    <h4>Solid Team</h4>
                                    <br>
                                    <h4>Over 25 Years Experience</h4>
                                </div> --}}
                                </div>
                            </div>
                        @endforeach
                        <br><br><br>
                    </div>
            </section>
            <!-- About -->
            <section class="about" id="scrollspyHeading2" data-aos="fade-up" data-aos-delay="200">
                <br><br><br><br>
                <div class="container">
                    <h1 style="text-align: center">ABOUT</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <br>
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
                            <br>
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
            <section class="produk" id="scrollspyHeading3" data-aos="fade-up" data-aos-delay="200">
                <br><br><br><br><br>
                <div class="container">
                    <h1 style="text-align: center">PRODUK</h1>
                    <div class="row">
                        @foreach ($produk as $r)
                            <div class="card" style="width: 23rem;">
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center">{{ $r->nama }}</h5>
                                </div>
                                <img src="{{ asset('foto/produk/gambar1') }}/{{ $r->gambar }}" class="card-img-top"
                                    alt="{{ $r->nama }}" style="text-align: center">
                            </div>&ensp;
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- Berita -->
            <section class="berita" id="scrollspyHeading4" data-aos="fade-up" data-aos-delay="200">
                <br><br><br><br>
                <div class="container">
                    <div class="section-header">
                        <h1>BERITA</h1>
                    </div>
                    <div class="row">
                        @foreach ($brt as $q)
                            <div class="card" style="width: 17rem;">
                                <br>
                                <img src="{{ asset('foto/berita/gambar1') }}/{{ $q->gambar }}" class="card-img-top"
                                    alt="{{ $q->judul }}">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $q->judul }}</h6>
                                </div>
                            </div>&ensp;
                        @endforeach
                    </div>
                </div>
                <br><br>
            </section>

            <!-- Berita -->
            <section class="kontak" id="scrollspyHeading5" data-aos="fade-up" data-aos-delay="200">
                <br><br><br><br>
                <div class="container">
                    <h1 style="text-align: center">KONTAK</h1>
                    <div class="row gy-5">
                        <div class="col-md-6 footer-info text-center">
                            <br>
                            <img src="{{ asset('loginn') }}/images/logo_.png" width="70%">
                        </div>
                        <div class="col-md-1 footer-links">
                        </div>
                        <div class="col-md-5 footer-links">
                            <ul>
                                @foreach ($kontak as $a)
                                    @if ($a->jenis == 'Alamat')
                                        <li>
                                            <p>{{ $a->alamat }}</p>
                                        </li>
                                    @endif
                                    @if ($a->jenis == 'Phone')
                                        <li>
                                            <p>{{ $a->alamat }}</p>
                                        </li>
                                    @endif
                                    @if ($a->jenis == 'Fax')
                                        <li>
                                            <p>{{ $a->alamat }}</p>
                                        </li>
                                    @endif
                                    @if ($a->jenis == 'Email')
                                        <li>
                                            <p>{{ $a->alamat }}</p>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <br><br>
            </section>
        </div>
    </main>
@endsection
