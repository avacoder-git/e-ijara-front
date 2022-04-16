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




@endsection



@section('javascript')
<script>
    var map = L.map('map', {
        zoom: 9,
        center: [39.449269626, 67.237035371],
    })
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
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

    map.on('pm:create', function(e) {
        let geojson = e.layer.toGeoJSON().geometry.coordinates[0]
        console.log(geojson )
        var latlong = [geojson[0][1],geojson[0][0]]
        var seeArea = turf.area(e.layer.toGeoJSON());
        seeArea = Math.round(seeArea)

        var text = "Umumiy maydoni: "+ seeArea+" m^2, "
        text += Math.round(seeArea  / 10000) +"ga <br>"

        var popup = L.popup()
            .setLatLng(latlong)
            .setContent('<p>Yerni tanladingniz<br />' + text)
            .openOn(map);
        // console.log(seeArea)
    })
</script>
@endsection