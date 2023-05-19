<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Wisudawan | Institut Teknologi Padang</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    @livewireStyles
    <style>
        .cards-list {
            z-index: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;

        }

        .card {
            margin: 20px 20px;
            width: 100px;
            height: 100px;
            border-radius: 20px;
            box-shadow: 5px 5px 30px 7px rgba(0, 0, 0, 0.25), -5px -5px 30px 7px rgba(0, 0, 0, 0.22);
            cursor: pointer;
            transition: 0.4s;
        }

        .card .card_image {
            width: inherit;
            height: inherit;
            border-radius: 20px;
            margin-left: -2px;
        }

        .card .card_image img {
            width: inherit;
            height: inherit;
            border-radius: 20px;
            object-fit: cover;
        }

        .card .card_title {
            text-align: center;
            border-radius: 5px;
            font-family: sans-serif;
            font-weight: bold;
            font-size: 12px;
            color: black;
            margin-top: -30px;
            margin-left: -20px;
            width: 140%;
            height: auto;
        }

        .card:hover {
            transform: scale(0.9, 0.9);
            box-shadow: 5px 5px 30px 15px rgba(0, 0, 0, 0.25),
                -5px -5px 30px 15px rgba(0, 0, 0, 0.22);
        }

        .title-white {
            color: white;
        }

        .title-black {
            color: black;
        }

        @media all and (max-width: 500px) {
            .card-list {
                /* On small screens, we are no longer using row direction but column */
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    @include('layouts/header')
    <!-- End Header -->

    <main id="main">

        {{$slot}}

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts/footer')
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @livewireScripts
    <script src="/js/app.js"></script>
    @stack('contentJS')
</body>

</html>