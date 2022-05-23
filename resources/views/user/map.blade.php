@extends('layouts.dashboard')

@section('style')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin="">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css"/>
    <script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@turf/turf@6/turf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet.snogylop@0.4.0/src/leaflet.snogylop.min.js"></script>
    <script src="https://unpkg.com/geojson-vt@3.2.0/geojson-vt.js"></script>
    <script src="{{ asset('assets/js/geojson-vt.js') }}"></script>
    <script src="{{ asset('assets/js/leaflet-geojson-vt2.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <style>
        #map {
            height: 80%;
        }
        .dropdown-menu{
            max-height: 400px;
            overflow-y: scroll;
            border-radius: 10px;

        }
        .dropdown-menu::-webkit-scrollbar {
            width: 5px;               /* width of the entire scrollbar */
        }
        .dropdown-menu::-webkit-scrollbar-track {
            background: white;        /* color of the tracking area */
        }
        .dropdown-menu::-webkit-scrollbar-thumb {
            background-color: blue;    /* color of the scroll thumb */
            border-radius: 50rem;       /* roundness of the scroll thumb */
        }

        .loader{
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0,0,0,0.5);
            z-index: 10000;
        }

        .opacity{
            opacity: 0;
        }

    </style>

@endsection
@section('content')

    <div id="loader" class="loader d-none"></div>
    <div id="loader2">
    </div>

    <div class="row justify-content-center">
        <div class="col-3 my-3">
            <select name="" id="regions" class="form-control">
                <option value="">Tanlang</option>
            </select>
        </div>
        <div class="col-3 my-3">
            <select name="" id="districts" class="form-control">
                <option value="">Tanlang</option>
            </select>
        </div>

    </div>


    <div id="map">

    </div>






@endsection



@section('javascript')
    <script type="text/javascript" src="{{ asset('js/map.js') }}"></script>

@endsection
