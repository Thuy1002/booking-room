<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendors/owl-carousel/owl.carousel.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/responsive.css') }}">
</head>
@include('_alert')

<body>
    @if (session()->has('success'))
        <div class="alert alert-success text-center">{{ session()->get('success') }}</div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger text-center">{{ session()->get('error') }}</div>
    @endif
    <!--================Header Area =================-->
    <header class="header_area">
        @include('layout.Client.header')
    </header>
    <!--================Header Area =================-->

    <!--================Banner Area =================-->
    <section class="banner_area">
        @include('layout.Client.banner')
    </section>
    <!--================Banner Area =================-->

    <!--================ Accomodation Area  =================-->
    @yield('content')
    <!--================ Recent Area  =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        @include('layout.Client.footer')
    </footer>
    <!--================ End footer Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('client/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('client/js/popper.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('client/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('client/js/mail-script.js') }}"></script>
    <script src="{{ asset('client/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('client/vendors/nice-select/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('client/js/mail-script.js') }}"></script>
    <script src="{{ asset('client/js/stellar.js') }}"></script>
    <script src="{{ asset('client/vendors/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ asset('client/js/custom.js') }}"></script>
</body>

</html>
