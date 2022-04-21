@extends('layouts.dashboard')

@section('style')
<script src="https://api-maps.yandex.ru/2.1/?lang=en_US" type="text/javascript"></script>


@endsection


@section('content')

<div id="map" style="width: 100%; height: 100%"></div>




<div id="regions"></div>

@endsection

@section('javascript')
<script type="text/javascript" src="{{ asset('js/map.js') }}"></script>
@endsection