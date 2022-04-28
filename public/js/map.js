var map = L.map('map', {
    zoom: 6,
    center: [41.66655, 66.3235],
})
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
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


map.on('pm:create', function (e) {
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

    $('#submit').click(function () {

    })
    // console.log(seeArea)
})

makeRegionList()

$('.region').click(function (){

    $('#regionName').text($(this).text())

    makeDistrictList($(this).data('region'))

    map.panTo(new L.LatLng($(this).data('lat'), $(this).data('long')));
    map.setZoom(8);

    var geojson = getRegion($(this).data('region'))

    L.geoJSON([geojson,geojson]).addTo(map)


})



function makeDistrictList(regionId)
{
    text = ""
    data =    getDistricts(regionId)

    for (let i = 0; i < data.length; i++) {
        text += '<button type="button" tabIndex="0" data-region="' + data[i].regioncode + '" class="dropdown-item district">' + data[i].nameuz + '</button>'
    }

    $('#districts').html(text)

    $('.district').click(function (){
        $('#districtName').text($(this).text())
    })

}


function makeRegionList() {
    var text = ""
    data = getRegions()

    for (let i = 0; i < data.length; i++) {
        text += '<button type="button"  data-lat="' + data[i].lat + '" data-long="' + data[i].long + '"  tabIndex="0" data-region="' + data[i].regioncode + '" class="dropdown-item region">' + data[i].nameuz + '</button>'
    }

    $('#regions').html(text)

}

function getRegions() {

    var result = false;
    jQuery.ajax({
        url: domain()+'/api/json/regions',
        dataType: "json",
        type: "get",
        async: false,
        data: {},
        success: function (data) {
            result = data;
        },
    });

    return result;
}


function getRegion(id) {

    var result = false;
    $.ajax({
        url: domain()+'/api/json/regions/' + id,
        dataType: "json",
        type: "get",
        async: false,
        success: function (data) {
            result = data;
        },
    });

    return result;
}
function getDistricts(id) {

    var result = false;
    $.ajax({
        url: domain()+'/api/json/districts/' + id,
        dataType: "json",
        type: "get",
        async: false,
        success: function (data) {
            result = data;
        },
    });

    return result;
}

function getRegionGeoJson(id) {

    var result = false;
    $.ajax({
        url: domain()+'/api/json/regions/' + id,
        dataType: "json",
        type: "get",
        async: false,
        success: function (data) {
            result = data;
        },
    });

    return result;
}

function domain()
{
    return "http://ijara.front.git"
}
