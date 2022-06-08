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
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">


    <!-- Scripts -->
    <link href="{{ asset('assets/main.css') }}" rel="stylesheet">
    <meta name="auth-check" content="{{ (auth()->check()) ? auth()->user()->id: 'false' }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    @yield('style')

    <style>
        .login{
            border-radius: 50px!important;
            border: 1px solid #08705F!important;
            color: #08705F!important;
            width: 44px;
            height: 44px;
            padding: 0!important;
            justify-content: center;
        }
        .mm-active{
            background-color: transparent!important;
            color: #08705F!important;
            padding-right: 0!important;

        }
        .mm-active span{
            width: 3px;
            height: 34px;
            background-color: #08705F;
            margin-left: auto;
            display: block;
            border-radius: 3px 0 0 3px!important;

        }
        .vertical-nav-menu li a{
            display: flex;
        }
        .app-sidebar{
            margin: 16px;
            border-radius: 12px;
            padding: 0;
            height: initial!important;
        }
        .app-sidebar__inner{
            padding: 24px 0 24px 16px!important;
        }

        .app-main{
            padding: 0!important;
        }
        .app-main__inner{
            padding-top: 16px!important;
        }

        .navbar {
            font-family: "Raleway";
            font-style: normal;
            font-weight: 600;
            font-size: 14px;
            line-height: 24px;
            /* identical to box height, or 171% */
            font-feature-settings: "pnum" on, "lnum" on;
            padding: 26px 60px;
            top: 0;
            z-index: 1000;
            background-color: white;
        }

        .navbar-brand path{
            fill: #08705F !important;
        }

        .navbar .navbar-nav {
            width: 100%;
        }
        .navbar .navbar-nav .nav-item {
            margin: 0 auto;
        }
        .navbar .navbar-nav .nav-item .nav-link {
            padding: 10px 16px;
            font-family: Raleway;
            font-weight: 600;
            color: #313131;
            font-size: 14px;
            font-style: normal;

        }

        .navbar .navbar-nav .nav-item .check-offer {
            border: 1px solid #08705F;
            box-sizing: border-box;
            border-radius: 8px;
            margin: 0 16px;
            transition: 0.3s;
            background-color: #08705F !important;
            color: white !important;
        }
        .navbar .navbar-nav .nav-item .check-offer:hover {
            background-color: white !important;
            color: #08705F !important;
        }
        .navbar .navbar-nav .nav-item .login {
            background: rgba(255, 255, 255, 0.1);
            /* White */
            border: 1px solid #FFFFFF;
            box-sizing: border-box;
            border-radius: 8px;
            transition: 0.3s;
        }
        .navbar .navbar-nav .nav-item .login:hover {
            background: #FFFFFF;
            /* White */
            color: #08705F;
            border: 1px solid #FFFFFF;
        }


        .card, .modal-content{
            box-shadow: none;
            border-radius: 12px;
            overflow: hidden;
        }

    </style>




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
