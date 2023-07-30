<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PT Kerta Rajasa Raya</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('user') }}/css/main.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('loginn') }}/images/logo_.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('user') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('user') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('user') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('user') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('user') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <img src="{{ asset('loginn') }}/images/logo-.png" alt="">
                <h1>KERTA RAJASA RAYA</h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                    <li><a class="{{ Request::is('about') ? 'active' : '' }}" href="#about">About</a>
                    </li>
                    <li><a class="{{ Request::is('produk') ? 'active' : '' }}" href="#produk">Produk</a></li>
                    <li><a class="{{ Request::is('berita') ? 'active' : '' }}" href="#berita">Berita</a></li>
                    <li><a class="{{ Request::is('kontak') ? 'active' : '' }}" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </nav>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
    </header>

    <!-- Beranda -->
    <section class="beranda">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-in">
                    <br><br><br>
                    <img src="https://kertarajasa.co.id/wp-content/uploads/2013/04/KRR.jpg" class="img-fluid"
                        alt="">
                </div>
                <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-in">
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
            <br>
        </div>
    </section>
    <br><br><br>
    <main id="main">
        <!-- About -->
        <section class="about" id="about" data-aos="fade-up">
            <section id="cliens" class="cliens section-bg">
                <div class="container">
                    <br>
                </div>
            </section>
            <div class="container">
                <div class="section-header">
                    <h1>ABOUT</h1>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <center>
                            <img src="{{ asset('loginn') }}/images/logo_.png" alt="" width="50%">
                        </center>
                    </div>
                    <div class="col-md-6">
                        <p style="text-align: justify; text-indent: 0.5in;">
                            Even with more than 20 years experience in the field, we keep listening to our customer
                            need, developing and expanding our range of product to fulfill the demanding need. From year
                            1985-2008, PT Kerta Rajasa Raya has numerous investment of new technology to fulfill the
                            demand of high quality product, more range of end product and production optimization.
                        </p>
                    </div>
                </div>
                <div class="row">
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
        <section class="produk" id="produk" data-aos="zoom-in">
            <section id="cliens" class="cliens section-bg">
                <div class="container">
                    <br>
                </div>
            </section>
            <div class="container">
                <div class="section-header">
                    <h1>PRODUK</h1>
                </div>
                <div class="row">
                    @foreach ($produk as $r)
                        <div class="col-md-4">
                            <div class="card-prestasi mb-3 text-center">
                                <a href="/spesifikasi/{{ $r->id }}" class="details-link" title="More Details">
                                    <img src="{{ asset('foto/produk/gambar1') }}/{{ $r->gambar }}"
                                        class="img-fluid" alt="">
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
        <section class="berita" id="berita" data-aos="zoom-in">
            <section id="cliens" class="cliens section-bg">
                <div class="container">
                </div>
            </section>
            <div class="container">
                <div class="section-header">
                    <h2>BERITA</h2>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        @foreach ($berita1 as $q)
                            <div class="card-karya mb-3">
                                <img src="{{ asset('foto/berita/gambar1') }}/{{ $q->gambar }}" class="img-fluid"
                                    alt="" width="100%">
                                <a href="/detail/{{ $q->id }}" class="details-link" title="More Details">
                                    <h3>{{ $q->judul }}</h3>
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-3">
                        @foreach ($berita as $q)
                            <div class="card-karya mb-3">
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
        </section>
    </main>
    <!-- Footer -->
    <footer id="footer" id="kontak" class="footer">
        <section class="kontak" id="kontak">
            <div class="footer-top">
                <div class="container">
                    <div class="row gy-5">
                        <div class="col-md-6 footer-info text-center">
                            <img src="{{ asset('loginn') }}/images/logo_.png" width="70%">
                        </div>
                        <div class="col-md-1 footer-links">
                        </div>
                        <div class="col-md-5 footer-links">
                            <center>
                                <h4>Kontak Kami</h4>
                            </center>
                            <ul>
                                @foreach ($kontak as $a)
                                    @if ($a->jenis == 'Alamat')
                                        <li><i class="fas fa-map-marked-alt"></i> <a>{{ $a->alamat }}</a></li>
                                    @endif
                                    @if ($a->jenis == 'Phone')
                                        <li><i class="fas fa-phone"></i> <a>{{ $a->alamat }}</a></li>
                                    @endif
                                    @if ($a->jenis == 'Fax')
                                        <li><i class="fas fa-phone"></i> <a>{{ $a->alamat }}</a></li>
                                    @endif
                                    @if ($a->jenis == 'Email')
                                        <li><i class="fas fa-envelope"></i> <a>{{ $a->alamat }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container footer-bottom clearfix text-center">
                <div class="copyright">
                    2023 &copy; Copyright Kerta Rajasa Raya
                </div>
            </div>
        </section>
    </footer>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>
    <script src="{{ asset('user') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('user') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('user') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('user') }}/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('user') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('user') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('user') }}/js/main.js"></script>
</body>

</html>
