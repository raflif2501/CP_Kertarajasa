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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('user') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('user') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('user') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('user') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('user') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <style>
        .isi {
            -webkit-column-width: 400px;
            -moz-column-width: 400px;
            column-width: 400px;
        }

        li {
            text-color: white;
        }
    </style>
</head>

<body style="background-color: #2B2A4C">
    <header id="header" class="header d-flex align-items-center">
        <nav id="navbar-example2" class="navbar navbar-light px-3" style="background-color:#B31312">
            <a class="navbar-brand" href="#" style="text-color:white">
                <img src="{{ asset('loginn') }}/images/logo-.png" alt="" width="50" height="auto"
                    class="d-inline-block align-text-top">
                <h1>&ensp;KERTA RAJASA RAYA</h1>
            </a>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="/daniel">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading2">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading3">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading4">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading5">Kontak</a>
                </li>
            </ul>
        </nav>
    </header>
    @yield('contentuser')
    <!-- Footer -->
    <footer id="footer" class="footer" style="background-color: #B31312">
        <br><br>
        <p style="text-color:white; text-align:center">
            2023 @ Copyright Kerta Rajasa Raya
        </p>
        <br><br>
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
