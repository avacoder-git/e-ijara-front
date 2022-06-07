<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>E-IJARA</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">


    <!-- Scripts -->
    <link href="{{ asset('assets/main.css') }}" rel="stylesheet">
    <meta name="auth-check" content="{{ (auth()->check()) ? auth()->user()->id: 'false' }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    @yield('style')
</head>

<body>

<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header" id="dashboard">
    <x-navbar></x-navbar>
    <div class="app-main">
        <x-sidebar></x-sidebar>
        <div class="app-main__outer">
            <div class="app-main__inner">
                @yield('content')
            </div>
        </div>
    </div>
</div>
{{--<script type="text/javascript" src="{{ asset('assets/scripts/main.js') }}"></script>--}}
<div type="text" class="d-none" id="geojson" > </div>


@yield("footer")



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>

@yield('javascript')

<script>
    var authcheck = $('meta[name="auth-check"]').attr('content');
    localStorage.setItem('authcheck', authcheck);

    $('#logout').click(function (){
        localStorage.clear()
    })

</script>


</body>

</html>
