<template>
    <div>
        <section class="land-details p-0 mg-b-30">
            <div class="container-fluid minh">
                <div class="row">

                    <div class="p-relative">
                        <l-map
                            @update:zoom="zoomUpdated"
                            @update:center="centerUpdated"
                            @update:bounds="boundsUpdated"
                            ref="mymap"
                            style="height: 58vh"
                            :zoom="zoom"
                            :center="center"
                            @ready="attachSidebar">


                            <div id="sidebar" class="leaflet-sidebar collapsed">
                                <!-- Nav tabs -->
                                <div class="leaflet-sidebar-tabs">
                                    <ul role="tablist"> <!-- top aligned tabs -->
                                        <li><a href="#home" role="tab"><i class="fa fa-bars"></i></a></li>
                                        <li><a href="#filter" role="tab"><i class="fa fa-sliders"></i></a></li>
                                        <li><a href="#map" role="tab"><i class="fa fa-globe"></i></a></li>
                                        <li><a href="https://id.egov.uz" role="tab"><i class="fa fa-sign-in"></i></a>
                                        </li>
                                    </ul>

                                    <ul role="tablist"> <!-- bottom aligned tabs -->
                                        <li><a href="#info" role="tab"><i class="fa fa-info"></i></a></li>
                                    </ul>
                                </div>

                                <!-- Tab panes -->
                                <div class="leaflet-sidebar-content">
                                    <div class="leaflet-sidebar-pane" id="home">
                                        <h3 class="leaflet-sidebar-header">
                                            Ер участкалари
                                            <div class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></div>
                                        </h3>
                                        <div class="table-wrap">
                                            <table id="basic" class="table">
                                                <thead class="basic">
                                                <tr>
                                                    <th style="color: #ffffff!important;" scope="col">Вилоят</th>
                                                    <th style="color: #ffffff!important;" scope="col">Сони</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="regions" @click="GetGeojsonsByParam(null,null)">
                                                    <td style="color: #ffffff!important;">Республика бўйича</td>
                                                    <td style="color: #ffffff!important;">{{ count_all }}</td>
                                                </tr>
                                                <tr
                                                    v-show="item.lands > 0" v-for="item in regions"
                                                    class="regions"
                                                    data-node-id="1703">
                                                    <td @click="GetGeojsonsByParam(item.regionid,null)"
                                                        style="color: #ffffff!important;">{{ item.nameuz }}
                                                        <table class="table" style="background-color: transparent">
                                                            <tr @click="GetGeojsonsByParam(distrct.regionid,distrct.areaid)"
                                                                class="districts" v-show="distrct.lands > 0"
                                                                v-for="distrct in item.districts">
                                                                <td>{{ distrct.nameuz }}</td>
                                                                <td>{{ distrct.lands }}</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td style="color: #ffffff!important;">{{ item.lands }}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="leaflet-sidebar-pane" id="filter">
                                        <h3 class="leaflet-sidebar-header">Саралаш
                                            <div class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></div>
                                        </h3>
                                        <div style="margin-top: 20px">
                                            <div class="form-group">
                                                <label for="option_regions" style="color: #fff">Ҳудуд</label>
                                                <select class="form-control" @change="GetDistrct()" v-model="region"
                                                        id="option_regions">
                                                    <option value="all">Барчаси</option>
                                                    <option v-for="region in regions" :value="region.regionid">
                                                        {{ region.nameuz }}
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="option_district" style="color: #fff">Туман(шаҳар)</label>
                                                <select class="form-control" v-model="district" id="option_district">
                                                    <option value="all">Барчаси</option>
                                                    <option v-for="district in districts" :value="district.areaid">{{
                                                            district.nameuz
                                                        }}
                                                    </option>
                                                </select>
                                            </div>
                                            <!--                                    <div class="form-group">-->
                                            <!--                                        <label for="type">Ҳолатлар</label>-->
                                            <!--                                        <select class="form-control" v-model="type" id="type">-->
                                            <!--                                            <option value="#">name</option>-->
                                            <!--                                        </select>-->
                                            <!--                                    </div>-->
                                            <hr>
                                            <button @click="GetGeojsons" class="btn btn-primary mb-2 pull-right">Саралаш
                                            </button>
                                        </div>
                                    </div>
                                    <div class="leaflet-sidebar-pane" id="map">
                                        <h3 class="leaflet-sidebar-header">Харита тури
                                            <div class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></div>
                                        </h3>
                                        <div style="margin-top: 20px">

                                        </div>
                                    </div>
                                    <div class="leaflet-sidebar-pane" id="info">
                                        <h3 class="leaflet-sidebar-header">Портал ҳақида
                                            <div class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></div>
                                        </h3>
                                        <div style="margin-top: 20px">

                                        </div>
                                    </div>

                                    <!--                            <div class="leaflet-sidebar-pane" id="profile">-->
                                    <!--                                <h1 class="leaflet-sidebar-header">Profile-->
                                    <!--                                    <div class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></div>-->
                                    <!--                                </h1>-->
                                    <!--                            </div>-->
                                </div>
                            </div>
                            <l-geo-json v-for="land in lands"
                                        v-bind:data="land.id"
                                        v-bind:key="land.text"
                                        :options="mapOptions"
                                        :geojson="land.geometries"
                                        @add="$nextTick(() => $event.target.openPopup())"
                            >
                                <l-popup></l-popup>
                            </l-geo-json>
                            <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
                        </l-map>
                        <div id="loader" v-if="shows" class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 style="margin: auto; background: none; display: block; shape-rendering: auto;"
                                 width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                <g transform="rotate(0 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#229e08">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                 begin="-0.9166666666666666s" repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(30 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#229e08">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                 begin="-0.8333333333333334s" repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(60 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#229e08">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                 begin="-0.75s" repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(90 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#229e08">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                 begin="-0.6666666666666666s" repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(120 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#229e08">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                 begin="-0.5833333333333334s" repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(150 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#229e08">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                 begin="-0.5s" repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(180 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#229e08">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                 begin="-0.4166666666666667s" repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(210 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#229e08">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                 begin="-0.3333333333333333s" repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(240 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#229e08">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                 begin="-0.25s" repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(270 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#229e08">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                 begin="-0.16666666666666666s" repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(300 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#229e08">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                 begin="-0.08333333333333333s" repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(330 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#229e08">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s"
                                                 repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                            </svg>
                        </div>
                    </div>

                </div>


            </div>

        </section>
        <div class="modal fade bd-example-modal-lg" id="taklif" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div v-if="user" class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="myLargeModalLabel">Бизнес таклиф учун</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="col-lg-12">
                            <div class="card-box m-b-20">
                                <h6 class="m-t-0"><strong>Ҳурматли тадбиркор!</strong></h6>
                                <p class="text-muted font-13 m-b-10">
                                    Сиз ушбу бўш ер участкаси бўйича ўзингизнинг таклифингизни ваколатли органлар
                                    муҳокамаси учун жўнатишингиз мумкин. Сизнинг фикрингиз биз учун жуда муҳим!
                                </p>
                                <div class="m-b-20">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-4 form-control-label">Ф.И.Ш<span
                                            class="text-danger">*</span></label>
                                        <div class="col-sm-7">
                                            <input type="name" required="" disabled v-model="user.fullname"
                                                   parsley-type="name" class="form-control" id="inputName"
                                                   placeholder="Тўлиқ исм-шарифингиз">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPhone" class="col-sm-4 form-control-label">Телефон
                                            рақамингиз<span class="text-danger">*</span></label>
                                        <div class="col-sm-7">
                                            <input type="tel" required="" masked="false" v-mask="'### ## ### ## ##'"
                                                   parsley-type="number" v-model="user.phone"
                                                   class="form-control" id="inputPhone"
                                                   placeholder="Телефон рақамингиз">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="category" class="col-sm-4 form-control-label">Ижара мақсади<span
                                            class="text-danger">*</span></label>
                                        <div class="col-sm-7">
                                            <select v-model="land_purpose" class="form-control">
                                                <option v-for="item in land_purposes" :value="item.id">{{ item.name }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="izoh" class="col-sm-4 form-control-label">Таклифингиз<span
                                            class="text-danger">*</span></label>
                                        <div class="col-sm-7">
                                            <textarea v-model="sentence" class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row pull-right">

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="col-sm-8 offset-sm-4">
                            <button class="btn btn-success" @click="LandOffersStore(land)">
                                Жўнатиш
                            </button>
                            <button type="reset" class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                Бекор қилиш
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="result" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Бизнес таклиф учун</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">
                            <p>Сизнинг таклифингиз {{ land_offer.id }} рақами билан рўйхатга олинди. Таклифингизни
                                ўрганиб
                                чиқиш жараёнида.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ёпиш</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>


function onEachFeature(feature, layer) {
    var v = this;
    layer.on('click', function (e) {
        if (feature.properties.is_merged_part == 0) {
            var content = '<table class="table table-bordered">' +
                '<tr>' +
                '<td class="proporties text-center"  colspan="2"><h3>' + feature.properties.regnum + '</h3></td>' +
                '</tr>' +
                '<tr>' +
                '<td class="proporties">' + "Худуд" + '</td>' +
                '<td class="proporties">' + feature.properties.address + '</td>' +
                '</tr>' +
                '<tr>' +
                '<td class="proporties">' + "Майдон" + '</td>' +
                '<td class="proporties">' + feature.properties.area + '</td>' +
                '</tr>' +
                '<tr>' +
                '<td class="proporties">' + "Кадастр рақами" + '</td>' +
                '<td class="proporties">' + feature.properties.cad_number + '</td>' +
                '</tr>' +
                '<tr>' +
                '<td class="proporties">' + "Холати" + '</td>' +
                '<td class="proporties">' + feature.properties.status + '</td>' +
                '</tr>' +
                '<tr>' +
                '<td class="proporties">' + "Тизимга келиб тушган сана" + '</td>' +
                '<td class="proporties">' + v.moment(feature.properties.created_at) + '</td>' +
                '</tr>' +
                '</table>';
        } else {
            var content = '<table class="table table-bordered">' +
                '<tr>' +
                '<td class="proporties text-center"  colspan="2"><h3>' + feature.properties.merged_lot_regnum + '</h3></td>' +
                '</tr>' +
                '<tr>' +
                '<td class="proporties">' + "Худуд" + '</td>' +
                '<td class="proporties">' + feature.properties.address + '</td>' +
                '</tr>' +
                '<tr>' +
                '<td class="proporties">' + "Майдон" + '</td>' +
                '<td class="proporties">' + feature.properties.merged_lot_area + '</td>' +
                '</tr>' +
                // '<tr>' +
                // '<td class="proporties">' + "Кадастр рақами" + '</td>' +
                // '<td class="proporties">' + feature.properties.cad_number + '</td>' +
                // '</tr>' +
                '<tr>' +
                '<td class="proporties">' + "Холати" + '</td>' +
                '<td class="proporties">' + feature.properties.status + '</td>' +
                '</tr>' +
                '<tr>' +
                '<td class="proporties">' + "Тизимга келиб тушган сана" + '</td>' +
                '<td class="proporties">' + v.moment(feature.properties.merged_lot_created_at) + '</td>' +
                '</tr>' +
                '</table>';
        }

        if (v.user !== null) {
            content += '<button  class="form-control btn btn-success mt-8" data-toggle="modal" data-target="#taklif">Таклиф юбориш</button>';
        } else {
            content += '<a href="/login" class="form-control btn btn-success mt-8">Тизимга кириш</a>';
        }
        var popupContent = L.popup()
            .setLatLng(e.latlng)
            .setContent(content);
        layer.bindPopup(popupContent);
        v.land = feature.properties.id;

    }).fire('click');
}


import "leaflet-sidebar-v2";
import "leaflet-sidebar-v2/css/leaflet-sidebar.css";
import {featureGroup} from "leaflet";
import 'leaflet-fullscreen/dist/leaflet.fullscreen.css';
import 'leaflet-fullscreen/dist/Leaflet.fullscreen';
import moment from 'moment'
import '@geoman-io/leaflet-geoman-free';
import '@geoman-io/leaflet-geoman-free/dist/leaflet-geoman.css';
import 'leaflet-geometryutil'

export default {
    name: "Map",
    data() {
        return {
            shows: false,
            user: null,
            category: '',
            sentence: '',
            regions: [],
            region: 'all',
            lands: [],
            land_offer: '',
            land: null,
            districts: [],
            district: 'all',
            type: null,
            land_purposes: [],
            land_purpose: null,
            url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            attribution:
                '<a target="_blank" href="http://www.agro.uz"> www.agro.uz &copy; AgroDigital</a>',
            zoom: 13,
            center: [39.449269626, 67.237035371],
            bounds: [
                [50.63901028125873, 1.3677978515625],
                [52.348763181988105, -1.3787841796875],
            ],
            count_all: 0,
            mapOptions: {
                style: function style(feature) {
                    return {
                        weight: 4,
                        fill: 'url(/img/land_bg.png)',
                        // opacity: 0.7,
                        // fillColor:'#000',
                        color: feature.properties.is_merged_part == 1 ? '#189987' : returnColor(feature.properties.status_code),
                        fillOpacity: feature.properties.is_merged_part == 1 ? 0.5 : 0.1
                    };
                },
                onEachFeature: onEachFeature.bind(this),
            }
        }
    },
    components: {},
    methods: {
        attachSidebar(mapObject) {
            const sidebar = L.control.sidebar({
                autopan: false, // whether to maintain the centered map point when opening the sidebar
                closeButton: true, // whether t add a close button to the panes
                container: "sidebar", // the DOM container or #ID of a predefined sidebar container that should be used
                position: "left" // left or right
            });

            sidebar.addTo(mapObject);
        },
        GetRegions() {
            axios.get('/api/directory/regions')
                .then(response => {
                    this.regions = response.data.data;
                    this.regions.forEach((element) => {
                        this.count_all += element.lands;
                    })
                })
                .catch(error => {
                    console.log(error)
                })
        },
        GetDistrct() {
            axios.get('/api/directory/districts', {
                params: {
                    regionid: this.region
                }
            })
                .then(response => {
                    this.districts = response.data.data
                })
                .catch(error => {
                    Vue.swal(error);

                })

        },
        async GetGeojsons() {
            this.shows = true;
            axios.get('/api/lands', {
                params: {
                    map: true,
                    regionid: this.region,
                    districtid: this.district
                }
            }).then(response => {
                this.lands = response.data.data;
                if (this.lands.length > 0) {
                    this.shows = false;
                    this.$nextTick().then(() => {
                        var group = new featureGroup();

                        this.$refs.mymap.mapObject.eachLayer(function (layer) {
                            if (layer.feature != undefined)
                                group.addLayer(layer);
                        });

                        this.$refs.mymap.mapObject.fitBounds(group.getBounds(), {padding: [20, 20]});
                    });
                }
                this.shows = false;

            })
                .catch(error => {
                    console.log(error);
                    this.shows = false;

                })
        },
        GetGeojsonsByParam(region, district) {
            this.shows = true;

            axios.get('/api/lands', {
                params: {
                    map: true,
                    regionid: region,
                    districtid: district
                }
            }).then(response => {
                this.lands = response.data.data;
                if (this.lands.length > 0) {
                    this.$nextTick().then(() => {
                        var group = new featureGroup();

                        this.$refs.mymap.mapObject.eachLayer(function (layer) {
                            if (layer.feature != undefined)
                                group.addLayer(layer);
                        });

                        this.$refs.mymap.mapObject.fitBounds(group.getBounds(), {padding: [20, 20]});
                    });
                }
                this.shows = false;

            })
                .catch(error => {
                    console.log(error);
                    this.shows = false;

                })
        },
        zoomUpdated(zoom) {
            this.zoom = zoom;
        },
        centerUpdated(center) {
            this.center = center;
        },
        boundsUpdated(bounds) {
            this.bounds = bounds;
        },
        GetLand() {
            if (this.$route.params.id != undefined) {
                axios.get('/api/lands/' + this.$route.params.id)
                    .then(response => {
                        this.lands.push(response.data.data);

                        if (Array.isArray(response.data.data))
                            this.lands = response.data.data;
                        else
                            this.land = response.data.data;
                        if (this.lands.length > 0) {
                            this.$nextTick().then(() => {
                                var group = new featureGroup();

                                this.$refs.mymap.mapObject.eachLayer(function (layer) {
                                    if (layer.feature != undefined)
                                        group.addLayer(layer);
                                });

                                this.$refs.mymap.mapObject.fitBounds(group.getBounds(), {padding: [20, 20]});
                            });
                        }
                        this.shows = false;
                    }).catch(error => {
                    console.log(error);

                })
            }

        },
        currentUser() {
            axios.get('/api/me')
                .then(response => {
                    this.user = response.data.user;
                })
                .catch(error => {
                    console.log(error);
                })
        },
        landPurposes() {
            axios.get('/api/directory/land_purposes')
                .then(response => {
                    this.land_purposes = response.data.data;
                })
                .catch(error => {
                    console.log(error);
                })
        },
        LandOffersStore(land_id) {
            axios.post('/api/land_offers', {
                fullname: this.user.fullname,
                phone: this.user.phone,
                sentence: this.sentence,
                person_type: 'J',
                land_id: land_id,
                land_purpose: this.land_purpose,
            })
                .then(response => {
                    this.land_offer = response.data.land_offers;
                    this.land = null;
                    this.land_purpose = null;
                    this.sentence = null;
                    $('#taklif').modal('hide')
                    $('#result').modal('show')
                })
                .catch(error => {
                    console.log(error)

                })
        },
        moment: function (date) {
            return moment(date).format('D.M.Y, H:mm:ss');
        }

    },
    // filters: {
    //     moment: function (date) {
    //         return moment(date).format('MMMM Do YYYY, h:mm:ss a');
    //     }
    // },
    async mounted() {
        const map = this.$refs.mymap.mapObject;
        map.addControl(new window.L.Control.Fullscreen());

                map.pm.addControls({
            position: 'topleft',
            drawPolyline: false,
            drawCircle: false,
            drawCircleMarker: false,
            drawMarker: false,
            drawRectangle: false,
            editLayers: false,

            //     {
            //     marker: false,
            //     circle: false,
            //     rectangle: false,
            //     circlemarker: false,
            //     polyline: false,
            // },
        })
        map.on('pm:create', function (e) {
            let geojson = e.layer.toGeoJSON().geometry.coordinates[0]
            
            var seeArea = turf.area(e.layer.toGeoJSON());
            // var seeArea = window.L.GeometryUtil.geodesicArea(e.layer.getLatLngs());
            console.log(seeArea)
        })

        this.GetRegions();
        this.landPurposes();
        if (typeof this.$route.params.id === 'undefined') {
            // this.GetGeojsons();

        } else {
            this.GetLand();
        }

        this.currentUser();
        // console.log(this.returnColor('loyihalash'));


    }
}

function returnColor(status) {
    switch (status) {
        case 'new':
            return '#1b84e7';
            break;
        case 'loyihalash':
            return '#F49917';
            break;
        case 'rad_etildi':
            return '#dc3545';
            break;
        case 'tanlov':
            return '#23BF08';
            break;
        default:
            return '#189987';
            break;
    }

}

</script>

<style scoped>

</style>
