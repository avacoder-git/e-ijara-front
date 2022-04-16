<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description"
          content="автоматизированная информационная система для осуществления процедур сбора, рассмотрения и согласования материалов по предоставлению земельных участков с уполномоченными органами и организациями">
    <meta name="author" content="AgroDigital">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ijara/assets/img/favicon.ico') }}">
    <title>Вход в систему | E-ijara</title>
    <!-- vendor css -->
    <link href="{{ asset('ijara/lib/@fortawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ijara/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ijara/lib/prismjs/themes/prism-tomorrow.css') }}" rel="stylesheet">
    <!-- template css -->
    <link rel="stylesheet" href="{{ asset('ijara/assets/css/main.css') }}">

    @yield('style')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
<div class="signin-panel" id="app">
    <div style="display: contents;"><img src="{{ asset('ijara/assets/img/bg1.svg') }}" class="svg-bg"></div>
    <div class="signin-sidebar">
        <div class="signin-sidebar-body">
            <a href="/" class="sidebar-logo mg-b-40">
                <img src="{{ asset('ijara/assets/img/logo.svg') }}">
            </a>
            <div class="divider-text">Фойдаланувчи кабинети</div>

            <div class="signin-forma mg-t-15">
                @include('common.messages')

                @yield('content')
            </div><!-- signin-sidebar-body -->
            <p class="mg-t-auto mg-b-0 tx-sm tx-color-03 text-center">Барча ҳуқуқлар ҳимояланган ⓒ 2021<br> ЎзР Қишлоқ
                хўжалиги вазирлиги.</p>
        </div><!-- signin-sidebar -->
    </div><!-- signin-panel -->
</div>

@yield('modal')
{{-- eimzo --}}
<script src="{{ asset('ijara/assets/js/eimzo/e-imzo.js') }}"></script>
<script src="{{ asset('ijara/assets/js/eimzo/e-imzo-client.js') }}"></script>
<script src="{{ asset('ijara/assets/js/eimzo/imzo.js') }}"></script>

<script src="{{ asset('ijara/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('ijara/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('ijara/lib/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('ijara/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('ijara/assets/js/svg-inline.js') }}"></script>
<script src="{{asset('js/vue.js')}}"></script>
@yield('script')

<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
