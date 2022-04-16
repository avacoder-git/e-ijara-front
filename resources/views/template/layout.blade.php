<!DOCTYPE html>
<html lang="uz">

<head>
    <!-- Title -->
    @section('title')
        <title>E-IJARA TANLOV | Очиқ электрон портал</title>
    @show
<!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/favicon.ico')}}">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/bootstrap.min.css')}}">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('assets/vendor/icon-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/icon-line/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/icon-line-pro/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/icon-hs/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/hs-megamenu/src/hs.megamenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/chosen/chosen.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fancybox/jquery.fancybox.min.css')}}">
    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    @yield('css')
</head>

<body>
<!-- Header -->
<header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance"
        data-header-fix-moment="600" data-header-fix-effect="slide">
    <div class="u-header__section g-transition-0_5" data-header-fix-moment-exclude="g-mt-0"
         data-header-fix-moment-classes="g-mt-minus-73 g-mt-minus-76--md">
        <!-- Topbar -->
        @include('template.blocks.top')
    <!-- End Topbar -->
        @include('template.blocks.nav')
    </div>
</header>
<!-- End Header -->
<!-- Content -->
<main>
    <!-- Promo Block -->
@yield('filter')

<!-- End Promo Block -->
    <!-- Rent Lot -->
        @yield('content')
    <!-- End Rent Лотлар -->
</main>
<!-- End Content -->
<!-- Footer -->
<footer class="g-bg-primary g-color-white-opacity-0_8 text-center g-pt-60 g-pb-40">
   @yield('footer')
</footer>
<!-- End Footer -->
<!-- JS Global Compulsory -->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-migrate/jquery-migrate.min.js')}}"></script>
<script src="{{asset('assets/vendor/popper.js/popper.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>
<!-- JS Implementing Plugins -->
<script src="{{asset('assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-ui/ui/widget.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-ui/ui/widgets/menu.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-ui/ui/widgets/mouse.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-ui/ui/widgets/slider.js')}}"></script>
<script src="{{asset('assets/vendor/chosen/chosen.jquery.js')}}"></script>
<script src="{{asset('assets/vendor/slick-carousel/slick/slick.js')}}"></script>
<script src="{{asset('assets/vendor/fancybox/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/hs.core.js')}}"></script>
<script src="{{asset('assets/js/components/hs.header.js')}}"></script>
<script src="{{asset('assets/js/helpers/hs.hamburgers.js')}}"></script>
<script src="{{asset('assets/js/components/hs.dropdown.js')}}"></script>
<script src="{{asset('assets/js/components/hs.slider.js')}}"></script>
<script src="{{asset('assets/js/components/hs.select.js')}}"></script>
<script src="{{asset('assets/js/components/hs.carousel.js')}}"></script>
<script src="{{asset('assets/js/components/hs.popup.js')}}"></script>
<script src="{{asset('assets/js/components/hs.go-to.js')}}"></script>
<script src="{{asset('assets/js/components/hs.countdown.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

<script src="{{asset('js/vue.js')}}"></script>
<script src="{{asset('js/axios.min.js')}}"></script>


@yield('scripts')
</body>

</html>
