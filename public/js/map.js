
var map = L.map('map', {
    zoom: 6,
    center: [41.66655, 66.3235],
})
var districtJSON = []
const googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});

const googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});


const googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
})

googleHybrid.addTo(map)

function addControls()
{
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
}


 map.on('pm:create', function (e) {
    let geojson = e.layer.toGeoJSON().geometry.coordinates[0]
    var latlong = [geojson[0][1], geojson[0][0]]
    var seeArea = turf.area(e.layer.toGeoJSON());
    seeArea = Math.round(seeArea)
    seeArea = Math.round(seeArea / 10000)

    var dataJSON = e.layer.toGeoJSON()

     if (checkIfInDistrict(geojson))
     {
         var text = "Umumiy maydoni: " + seeArea + " ga <br>"
         var btn = "<button class='btn btn-primary' data-toggle='modal' data-target='#values_modal'>Davom etish</button>"
         var popup = L.popup()
             .setLatLng(latlong)
             .setContent('<p>Yerni tanladingniz<br />' + text + btn)
             .openOn(map);

         $("#geojson").text(JSON.stringify(dataJSON))
         $("#area").val(seeArea)

     }else {
         map.removeLayer(e.layer);

         alert('Chizilgan yer tanlangan tuman hududiga kirmaydi!')
     }




 })


function checkIfInDistrict(geojson)
{
    var poly1 = turf.polygon([geojson]);

    var poly2 = turf.polygon([districtJSON.features[0].geometry.coordinates[0]]);

    var intersection = turf.intersect(poly1, poly2);
    return intersection != null
}



$('#submit').click(function (){

    var region_id = $("#region_id").val()
    var district_id = $("#district_id").val()
    var geojson = $("#geojson").text()
    var amount = $("#amount").val()
    var land_purpose_id = $("#purpose_id").val()
    var formData = {region_id,district_id,geojson,period: amount,land_purpose_id}

    $.ajax({
        url : domain()+"/api/application", // Url of backend (can be python, php, etc..)
        type: "POST", // data type (can be get, post, put, delete)
        data : formData, // data in json format
        success: function(response) {
            window.location.href = domain() + "/dashboard";
        },
        error: function (jqXHR) {
            var status = jqXHR.status

            if (status === 500)
            {
                $('#error').text("Ma'lumot jo'natishda xatolik yuz berdi")
            }
            if (status === 422)
            {
                data = jqXHR.responseJSON.errors
                for (var key in data) {
                    // skip loop if the property is from prototype
                    if (!data.hasOwnProperty(key)) continue;

                    var obj = data[key];
                    for (var prop in obj) {
                        // skip loop if the property is from prototype
                        if (!obj.hasOwnProperty(prop)) continue;

                        // your code
                        $('#error_'+key).text(obj[prop])
                    }
                }

            }

        }
    });


})


makeRegionList()

$('.region').click(function (){

    $('#regionName').text($(this).text())
    $('#region_name').val($(this).text())
    $('#region_id').val($(this).data('id'))

    makeDistrictList($(this).data('region'))
    var geojson = getRegion($(this).data('region'))

    makeGeoJSON(geojson)
})


function makeGeoJSON(geojson)
{

    removeMarkers();
    let geoJSON = L.geoJSON(geojson,
    {
        // style: {
        //     color: 'red',
        //     opacity: 1,
        //     fillOpacity: 0.9
        // },
        invert: true,
        onEachFeature: function (feature, layer) {
            layer.myTag = "myGeoJSON"
        }
    }).addTo(map)
    map.fitBounds(geoJSON.getBounds());
    districtJSON = geojson

}







function removeMarkers() {
    map.eachLayer( function(layer) {

        if ( layer.myTag &&  layer.myTag === "myGeoJSON") {
            map.removeLayer(layer)
        }

    });

}


function makeDistrictList(regionId)
{
    text = ""
    data =    getDistricts(regionId)

    for (let i = 0; i < data.length; i++) {
        text += '<button type="button" tabIndex="0" data-cad="'+ data[i].cad_num +'" data-id="' + data[i].id + '" class="dropdown-item district">' + data[i].nameuz + '</button>'
    }

    $('#districts').html(text)

    $('.district').click(function (){
        $('#districtName').text($(this).text())
        $('#district_name').val($(this).text())
        $('#district_id').val($(this).data('id'))
        var geojson = getDistrict($(this).data('id'))
        makeGeoJSON(geojson)
        addControls()
        makeLandsGeojson($(this).data('cad'))

    })

}


function makeRegionList() {
    var text = ""
    data = getRegions()

    for (let i = 0; i < data.length; i++) {
        text += '<button type="button" data-id="'+data[i].id+'"  data-lat="' + data[i].lat + '" data-long="' + data[i].long + '"  tabIndex="0" data-region="' + data[i].regioncode + '" class="dropdown-item region">' + data[i].nameuz + '</button>'
    }

    $('#regions').html(text)

}


var geojsonStyle = {
    fillColor:"#0090ff",
    color: "#000",
    weight: 1,
    opacity: 1,
    fillOpacity: 0.7,
};

var options = {
    maxZoom: 20,
    tolerance: 3,
    debug: 0,
    style: geojsonStyle
};

var geojsonStyle2 = {
    fillColor:"#ff0000",
    color: "#000",
    weight: 1,
    opacity: 1,
    fillOpacity: 0.7,
};

var options2 = {
    maxZoom: 20,
    tolerance: 3,
    debug: 0,
    style: geojsonStyle2
};

console.log(getCadLands("15:10"));

function makeLandsGeojson(cad_num)
{
    var lands = getLands(cad_num)
    var cadLands = getCadLands(cad_num)

    var geojson = {
        features: lands.data,
        type: "FeatureCollection"
    }
    L.geoJson.vt(geojson, options).addTo(map);
    L.geoJson.vt(cadLands, options2).addTo(map);

}


function getCadLands(prefix)
{
    var result = false;
    jQuery.ajax({
        url: "https://api.agro.uz/gis_bridge/eijara",
        dataType: "json",
        type: "get",
        async: false,
        data: {
            prefix
        },
        success: function (data) {
            result = data;
        },
    });
    return result;
}



function getLands(cad_num)
{
    var result = false;
    jQuery.ajax({
        url: domain()+'/api/geojson/lands',
        dataType: "json",
        type: "get",
        async: false,
        data: {
            cad_num
        },
        success: function (data) {
            result = data;
        },
    });
    return result;
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
makePurposeList()

function makePurposeList()
{
    var data = getPurposes()
    var text = ""

    for (let i=0; i < data.length; i++)
    {
        text += '<option value="'+data[i].id+'" class="text-uppercase">'+ data[i].name +'</option> '
    }


    $("#purpose_id").html(text)
}




function getPurposes() {

    var result = false;
    jQuery.ajax({
        url: domain()+'/api/directory/land_purposes',
        dataType: "json",
        type: "get",
        async: false,
        data: {},
        success: function (data) {
            result = data.data;
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

function getDistrict(id) {

    var result = false;
    $.ajax({
        url: domain()+'/api/json/district/' + id,
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
