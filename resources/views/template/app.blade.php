<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="uz-UZ">
<![endif]-->
<html lang="uz-UZ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Ер участкаларини бериш бўйича материалларни тўплаш, кўриб чиқиш ва ваколатли органлар ва ташкилотлар билан келишишни амалга оширишга мўлжалланган автоматлаштирилган ахборот тизими"/>
    <title>E-IJARA</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('Frontassets/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('Frontassets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Frontassets/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('Front/assets/favicon/site.webmanifest')}}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{asset('Front/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/vendor/icon-line/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/vendor/icon-line-pro/style.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/icon-font.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/auction.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/fonts/fonts.css')}}">
{{--    <link rel="stylesheet" href="{{asset('css/table.css')}}">--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://npmcdn.com/@turf/turf@6.5.0/turf.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

<!-- Scripts -->
    <link href="{{ asset('assets/main.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/leaflet-geometryutil@0.10.1/src/leaflet.geometryutil.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/main.js') }}"></script>

<!--[if lt IE 9]>
    <script src="{{asset('Front/assets/js/html5shiv.js')}}"></script>
    <script src="{{asset('Front/assets/js/respond.min.js')}}"></script>
    <![endif]-->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(86969678, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            ecommerce:"dataLayer"
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/86969678" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body>
<div id="app">
    <app v-cloak></app>
</div>

<script src="{{mix('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('Front/assets/js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Front/assets/js/bootstrap.min.js')}}"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="{{asset('Front/assets/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('Front/assets/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Front/assets/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('Front/assets/js/custom.js')}}"></script>
<script type="text/javascript" src="{{asset('Front/assets/js/login.js')}}"></script>
<!-- FLIP COUNT SCRIPTS  -->

</body>

</html>
