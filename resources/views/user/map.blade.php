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

    </style>

@endsection
@section('content')

    <div class="row justify-content-center">
        <div class="dropdown d-inline-block">
            <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                    class="mb-2 mr-2 dropdown-toggle btn btn-primary" id="regionName">Viloyatni tanlang
            </button>
            <div tabindex="-1" role="menu" aria-hidden="true" id="regions" class="dropdown-menu" x-placement="bottom-start"
                 style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 33px, 0px);">
                <button type="button" tabindex="0" class="dropdown-item">Tanlang</button>
            </div>
        </div>
        <div class="dropdown d-inline-block">
            <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" id="districtName"
                    class="mb-2 mr-2 dropdown-toggle btn btn-success">Tumanni tanlang
            </button>
            <div tabindex="-1" role="menu" aria-hidden="true" id="districts" class="dropdown-menu"
                 x-placement="bottom-start"
                 style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 33px, 0px);">
                <button type="button" tabindex="0" class="dropdown-item">Tanlang</button>
            </div>
        </div>

    </div>


    <div id="map">

    </div>






@endsection



@section('javascript')
    <script type="text/javascript" src="{{ asset('js/map.js') }}"></script>

@endsection
