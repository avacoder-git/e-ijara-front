<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Meta -->
        <meta name="description" content="автоматизированная информационная система для осуществления процедур сбора, рассмотрения и согласования материалов по предоставлению земельных участков с уполномоченными органами и организациями">
        <meta name="author" content="AgroDigital">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ijara/assets/img/favicon.ico') }}">
        <title>@yield('title')</title>

        <!-- vendor css -->
        <link href="{{ asset('ijara/lib/@fortawesome/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('ijara/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('ijara/lib/prismjs/themes/prism-tomorrow.css') }}" rel="stylesheet">
        <link href="{{ asset('ijara/lib/simple-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('ijara/lib/select2/css/select2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('ijara/lib/multiselect/multiselect.css') }}" rel="stylesheet">
        <link href="{{ asset('ijara/lib/treetable/bootstrap-table-expandable.css') }}" rel="stylesheet">
        <link href="{{ asset('ijara/lib/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">
        <link href="{{ asset('ijara/lib/datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet">

        <!-- template css -->
        <link rel="stylesheet" href="{{ asset('ijara/assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('ijara/assets/css/menu.css') }}">

        @yield('style')

        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>

    <body>
        <div id="app">
            <div class="content-body">
                @yield('content')
            </div>
        </div>

        <script src="{{ asset('ijara/lib/jquery/jquery.min.js') }}"></script>

        {{-- eimzo --}}
        <script src="{{ asset('ijara/assets/js/eimzo/e-imzo.js') }}"></script>
        <script src="{{ asset('ijara/assets/js/eimzo/e-imzo-client.js') }}"></script>

        <script src="{{ asset('ijara/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('ijara/lib/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('ijara/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('ijara/assets/js/svg-inline.js') }}"></script>

        <script src="{{ asset('ijara/lib/datepicker/moment.js') }}"></script>
        <script src="{{ asset('ijara/lib/datepicker/js/bootstrap-datepicker.js') }}"></script>

        <script src="{{ asset('ijara/lib/multiselect/multiselect.js') }}"></script>
        <script src="{{ asset('ijara/assets/js/type-objects.js') }}"></script>
        <script src="{{ asset('ijara/assets/js/land-tree-table.js') }}"></script>
        <script src="{{ asset('ijara/lib/quill/quill.min.js') }}"></script>
        <script src="{{ asset('ijara/lib/cleave.js/cleave.min.js') }}"></script>
        <script src="{{ asset('ijara/lib/cleave.js/addons/cleave-phone.uz.js') }}"></script>

        <script src="{{ asset('ijara/lib/inputmask/jquery.inputmask.js') }}"></script>
        <script src="{{ asset('ijara/lib/inputmask/inputmask.binding.js') }}"></script>


        @yield('script')

        <script src="{{ asset('js/custom.js') }}"></script>
    </body>

</html>
