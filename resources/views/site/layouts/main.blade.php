<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <link rel="icon" href="{{ asset('global') }}/img/titlelogo.svg" type="image/icon type" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

    <!-- Flaticon Font -->
    <link href="{{ asset('global') }}/lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('global') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{ asset('global') }}/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('global') }}/css/style.css" rel="stylesheet" />

    <title>HiTOEFL | @yield('title')</title>
</head>

<body>

    @include('site.layouts.header')

    @yield('content')

    @include('site.layouts.footer')




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('global') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('global') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('global') }}/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="{{ asset('global') }}/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('global') }}/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{ asset('global') }}/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('global') }}/js/main.js"></script>

    <script>
        feather.replace()
    </script>

</body>

</html>
