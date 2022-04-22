@extends('layouts.dashboard')

@section('style')
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="https://yastatic.net/s3/mapsapi-jslibs/area/0.0.1/util.calculateArea.min.js" type="text/javascript"></script>
<script src="https://yastatic.net/s3/mapsapi-jslibs/polylabeler/1.0.1/polylabel.min.js" type="text/javascript"></script>
@endsection


@section('content')

<div id="map" style="width: 100%; height: 100%"></div>




@endsection

@section('javascript')
<script type="text/javascript" src="{{ asset('js/map.js') }}"></script>
@endsection