@extends('layouts.dashboard')

@section('style')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="">
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css" />
<script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@turf/turf@6/turf.min.js"></script>

<style>
    #map {
        height: 90%;
    }
</style>

@endsection
@section('content')

<div id="map">

</div>

<div class="d-none" id="district">{{ $data['region'] }}</div>

@endsection

<div class="modal fade bd-example-modal-lg-2" id="values_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ариза топшириш</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body ht-250 scrollbar-sm pos-relative" style="overflow-y: auto;">

                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Керакли маълумотлар</h5>
                        <div>
                            <div class="form-group">
                                <label for="regions">Вилоят</label>
                                <select class="form-control" id="regions">
                                    <option value="">Туман </option>

                                    @foreach($regions as $region)
                                    <option value="{{ $region->regionid }}" {{ $data['region'] == $region->regionid ? 'selected': '' }}>{{ $region->nameuz }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="districts">Тагланган ер Тумани</label>
                                <select class="form-control" id="districts">
                                    <option value="">Танланг</option>
                                    @foreach($regions as $region)
                                    @foreach($region->districts as $district)
                                    <option class="district region-{{ $district->regionid }}" value="{{ $district->id }}" data-region="{{ $district->id }}">{{ $district->nameuz }}</option>
                                    @endforeach
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="regions">Ер участкасини ижарага олиш мақсади </label>
                                <select class="form-control" id="regions">
                                    <option value="">Танланг</option>
                                    @foreach($land_purposes as $land_purpose)
                                    <option value="{{ $region->id }}">{{ $land_purpose->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Ер участкасининг майдони </span>
                                <input type="text" class="form-control disabled" disabled id="area">
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Кўзланаётган ижара муддати </span></div>
                                <input placeholder="Amount" type="number" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Ёпиш</button>
                <a type="button" class="btn d-block btn-primary" style="color:white">Аризани топшириш</a>
            </div>

        </div>

    </div>

    <div id="selectedRegion" class="d-none"></div>
    <div id="selectedDistrict" class="d-none"></div>
</div>

@php
$code = $data['region'];
//dd($code);
//$long = null;
//$lat = null;

                                switch($data['region']) {
                                case '1703':
                                $long = 72.35939;
                                $lat = 40.769654;
                                break;
                                case '1706':
                                $long = 64.412842;
                                $lat = 39.786262;
                                break;
                                case '1708':
                                $long = 67.872932;
                                $lat = 40.130333;
                                break;
                                case '1710':
                                $long = 65.783899;
                                $lat = 38.858500;
                                break;
                                case '1712':
                                $long = 65.366498;
                                $lat = 40.102320;
                                break;
                                case '1714':
                                $long = 71.638784;
                                $lat = 40.998954;
                                break;
                                case '1718':
                                $long = 66.973035;
                                $lat = 39.624009;
                                break;
                                case '1722':
                                $long = 67.331372;
                                $lat = 37.817498;
                                break;
                                case '1724':
                                $long = 68.779778;
                                $lat = 40.491668;
                                break;
                                case '1727':
                                $long = 69.251899;
                                $lat = 41.311980;
                                break;
                                case '1730':
                                $long = 71.749777;
                                $lat = 40.412322;
                                break;
                                case '1733':
                                $long = 60.612778;
                                $lat = 41.582929;
                                break;
                                case '1735':
                                $long = 59.505616;
                                $lat = 42.963678;
                                break;
                                // code block
}
@endphp

@section('javascript')
<script>
    $('.district').addClass('d-none')
    $('.region-' + $('#regions').val()).removeClass('d-none')


    $('#regions').change(function() {
        $('.district').addClass('d-none')
        $('#districts').val('')
        $('.region-' + $(this).val()).removeClass('d-none')
    })


    var lat = "<?= $lat; ?>"
    var long = "<?= $long; ?>"
    window.lands = {}
    window.selected = ""
    var map = L.map('map', {
        zoom: 11,
        center: [lat, long],
    })
    L.tileLayer("https://api.maptiler.com/tiles/satellite-mediumres-2018/?key=O2Qg9hZqwOFr4BxdOwGZ#", {
        maxZoom: 19,

        attribution: '<a target="_blank" href="http://www.agro.uz"> www.agro.uz &copy; AgroDigital</a>'
    }).addTo(map);
    map.pm.addControls({
        position: 'topleft',
        drawCircle: false,
        drawMarker: false,
        drawCircleMarker: false,
        drawPolyline: false,
        drawRectangle: false,
        editLayers: false,
        editMode: false,
        dragMode: false,
        cutPolygon: false,
    });

    getLands()

    function getLands() {
        $.ajax({
            url: "/api/lands",
            dataType: "json",
            type: "Get",
            async: true,
            data: {
                map: true,
                districtid: $('#district').text()
            },
            success: function(data) {
                console.log(data)
            },
            error: function(xhr, exception) {
                var msg = "";
                if (xhr.status === 0) {
                    msg = "Not connect.\n Verify Network." + xhr.responseText;
                } else if (xhr.status == 404) {
                    msg = "Requested page not found. [404]" + xhr.responseText;
                } else if (xhr.status == 500) {
                    msg = "Internal Server Error [500]." + xhr.responseText;
                } else if (exception === "parsererror") {
                    msg = "Requested JSON parse failed.";
                } else if (exception === "timeout") {
                    msg = "Time out error." + xhr.responseText;
                } else if (exception === "abort") {
                    msg = "Ajax request aborted.";
                } else {
                    msg = "Error:" + xhr.status + " " + xhr.responseText;
                }

            }
        });

    }




    function getRegionName(geojson) {
        $.ajax({
            url: "https://maps.googleapis.com/maps/api/geocode/json?latlng=" + geojson[1] + "," + geojson[0] + "&key=AIzaSyCZpt7uFORIrboUSXLpHTFehR5OJIEyeYY",
            success: function(data) {
                console.log(data)
                var results = data.results
                $("#selectedRegion").text(results[results.length - 2].formatted_address.split(' ')[0])
                $("#selectedDistrict").text(results[results.length - 3].formatted_address.split(' ')[0])
                console.log($("#selectedRegion").text())
                console.log($("#selectedDistrict").text())
            },
        })


    }


    map.on('pm:create', function(e) {
        let geojson = e.layer.toGeoJSON().geometry.coordinates[0]
        var latlong = [geojson[0][1], geojson[0][0]]
        var seeArea = turf.area(e.layer.toGeoJSON());
      
        seeArea = Math.round(seeArea)

        getRegionName(geojson[0])
        console.log(window.selected)
        var text = "Umumiy maydoni: " + Math.round(seeArea / 10000) + " ga <br>"
        var btn = "<button class='btn btn-primary' id='submit' data-toggle='modal' data-target='#values_modal'>Davom etish</button>"
        $("#area").val()
        var popup = L.popup()
            .setLatLng(latlong)
            .setContent('<p>Yerni tanladingniz<br />' + text + btn)
            .openOn(map);

        $('#submit').click(function() {

        })
        // console.log(seeArea)
    })
</script>
@endsection