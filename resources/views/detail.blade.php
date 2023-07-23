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
                    {{-- <li><a class="{{ Request::is('about') ? 'active' : '' }}" href="#about">About</a>
                    </li>
                    <li><a class="{{ Request::is('produk') ? 'active' : '' }}" href="#produk">Produk</a></li>
                    <li><a class="{{ Request::is('berita') ? 'active' : '' }}" href="#berita">Berita</a></li>
                    <li><a class="{{ Request::is('kontak') ? 'active' : '' }}" href="#kontak">Kontak</a>
                    </li> --}}
                </ul>
            </nav>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
    </header>
    <main id="main">
        <!-- Detail -->
        <section class="detail" id="detail" data-aos="fade-up">
            <div class="container">
                <div class="section-header">
                    <h2>{{ $data->judul }}</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-karya mb-3">
                            <center>
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('foto/berita/gambar1') }}/{{ $data->gambar }}"
                                                class="img-fluid" alt="" width="30%">
                                        </div>
                                        @if ($data->gambar2 != null)
                                            <div class="carousel-item">
                                                <img src="{{ asset('foto/berita/gambar2') }}/{{ $data->gambar2 }}"
                                                    class="img-fluid" alt="" width="30%">
                                            </div>
                                        @endif
                                        @if ($data->gambar3 != null)
                                            <div class="carousel-item">
                                                <img src="{{ asset('foto/berita/gambar3') }}/{{ $data->gambar3 }}"
                                                    class="img-fluid" alt="" width="30%">
                                            </div>
                                        @endif
                                        @if ($data->gambar4 != null)
                                            <div class="carousel-item">
                                                <img src="{{ asset('foto/berita/gambar4') }}/{{ $data->gambar4 }}"
                                                    class="img-fluid" alt="" width="30%">
                                            </div>
                                        @endif
                                        @if ($data->gambar5 != null)
                                            <div class="carousel-item">
                                                <img src="{{ asset('foto/berita/gambar5') }}/{{ $data->gambar5 }}"
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
                            <p> {!! $data->isi !!}</p>
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
