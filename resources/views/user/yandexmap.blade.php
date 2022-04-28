@extends('layouts.dashboard')

@section('style')
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
@endsection


@section('content')
    <div class="dropdown d-inline-block">
        <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary" id="regionName">Viloyatni tanlang</button>
        <div tabindex="-1" role="menu" aria-hidden="true" id="regions" class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 33px, 0px);">
            <button type="button" tabindex="0" class="dropdown-item">Tanlang</button>
        </div>
    </div>
    <div class="dropdown d-inline-block">
        <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" id="districtName" class="mb-2 mr-2 dropdown-toggle btn btn-success">Tumanni tanlang</button>
        <div tabindex="-1" role="menu" aria-hidden="true" id="districts" class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 33px, 0px);">
            <button type="button" tabindex="0" class="dropdown-item">Tanlang</button>
        </div>
    </div>

    <div id="map" style="width: 100%; height: 100%"></div>


@endsection

@section('javascript')
    <script type="text/javascript" src="{{ asset('js/map.js') }}"></script>

@endsection
