<template>
    <div class="bg-gray-100" style="padding-top: 100px">

        <div class="d-flex dashboard">
            <Sidebar></Sidebar>

            <div class="col">
                <div class="card">
                    <div class="row">
                        <div class="col-6">
                            <h1 class="text-center">{{ $t("nav.links.map") }}</h1>
                            <div class="d-flex  mt-2">
                                <v-select
                                    @change="setDistricts"
                                    v-model="selectedRegion"
                                    @input="setDistricts"
                                    :reduce="(option) => option.regioncode"
                                    class="select-2"
                                    label="nameuz"
                                    :options="regions"></v-select>
                                <v-select
                                    v-model="selectedDistrict"
                                    @change="setMap()"
                                    @input="setMap"
                                    class="select-2"
                                    :reduce="(option) => option.id"
                                    label="nameuz"
                                    :options="districts"></v-select>
                            </div>
                        </div>
                        <div class="col-6 mt-4">
                            <h5><b>{{ $t("dashboard.tanlangan") }}</b>: {{ selectedLands.length }} ta</h5>
                            <h5><b>{{ $t("dashboard.tanlangan_area") }}</b>: {{ selectedLandAreas }} ga</h5>
                        </div>

                    </div>
                    <div class="map">
                        <l-map
                            ref="map"
                            :options="options"
                            :zoom="zoom"
                            :center="center">
                            <l-tile-layer :maxZoom="maxZoom" :subdomains="subdomains" :url="url"
                                          :attribution="attribution"></l-tile-layer>
                            <l-control-zoom position="bottomright"></l-control-zoom>
                            <!--                        <l-marker ref="marker" :lat-lng="currentLatLng">-->
                            <!--                            <l-icon :icon-url="customIcon"></l-icon>-->

                            <!--                            <template v-if="selectedLand && layer">-->
                            <!--                                <l-popup ref="popup">-->
                            <!--                                    Umumiy maydoni: {{ selectedLand.properties.area }} ga <br><br>-->
                            <!--                                    <template v-if="selectedLand">-->
                            <!--                                        <button @click="confirm(selectedLand)" class='btn btn-primary'>Tasdiqlash-->
                            <!--                                        </button>-->
                            <!--                                    </template>-->

                            <!--                                    <template v-if="selectedLands.includes(selectedLand.properties.id)">-->
                            <!--                                        <button class='btn btn-danger ml-1 btn-remove'-->
                            <!--                                                @click="removeLand(selectedLand, layer)">Bekor qilish-->
                            <!--                                        </button>-->
                            <!--                                    </template>-->
                            <!--                                    <template v-if="!selectedLands.includes(selectedLand.properties.id)">-->
                            <!--                                        <button @click="selectLand(selectedLand, layer)"-->
                            <!--                                                class='btn btn-success ml-1 btn-select'>Yana tanlash-->
                            <!--                                        </button>-->
                            <!--                                    </template>-->
                            <!--                                </l-popup>-->
                            <!--                            </template>-->

                            <!--                        </l-marker>-->

                        </l-map>

                        <p class="check-offer" @click="confirm()" v-if="selectedLands.length">
                            Tasdiqlash
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal  bd-example-modal-lg-2" id="values_modal" tabindex="-1" role="dialog"
             aria-labelledby="myLargeModalLabel" aria-hidden="true">


            <div class="modal-dialog modal-lg">

                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Taklif ma'lumotlari</h5>
                        <button type="button" class="close close1" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body ht-250 scrollbar-sm pos-relative" style="overflow-y: auto;">

                        <div class="main-card mb-3 ">


                            <div class="card-body">
                                <h5 class="card-title">Kerakli ma'lumotlar</h5>
                                <div>
                                    <div class="form-group">
                                        <label>Viloyat</label>
                                        <input type="number" name="region_id" disabled class="d-none" id="region_id">
                                        <input type="text" v-if="selectedRegion"
                                               :value="getRegionById(selectedRegion).nameuz" class="form-control"
                                               disabled id="region_name">
                                        <div class="text-danger" v-if="errors">{{ errors.region_id }}</div>
                                    </div>
                                    <div class="text-danger" id="error_region_id"></div>


                                    <div class="form-group">
                                        <label>Tanlangan yer tumani</label>
                                        <input type="number" name="district_id" disabled class="d-none"
                                               id="district_id">
                                        <input type="text" class="form-control" v-if="selectedDistrict"
                                               :value="getDistrictById(selectedDistrict).nameuz" disabled
                                               id="district_name">
                                        <div class="text-danger" v-if="errors">{{ errors.district_id }}</div>

                                    </div>
                                    <div class="text-danger" id="error_distric_id"></div>

                                    <div class="form-group">
                                        <label>Yer uchastkasini ijaraga olish maqsadi</label>
                                        <select name="purpose" id="purpose_id" class="form-control"
                                                v-model="land_purpose" required>
                                            <option value="">Ijaraga olish maqsadini belgilang</option>
                                            <!--                                            @foreach($land_purposes as $key => $item)-->
                                            <option :value="land_purpose.id" v-for="land_purpose in land_purposes">{{
                                                    land_purpose.name
                                                }}
                                            </option>
                                        </select>
                                        <div class="text-danger" v-if="errors">{{ errors.land_purpose_id }}</div>

                                    </div>
                                    <div class="text-danger" id="error_purpose_id"></div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text"
                                              id="basic-addon1">Yer uchastkasining maydoni (ga)</span>
                                        <input type="text" class="form-control disabled" :value="selectedLandAreas"
                                               disabled id="area">
                                    </div>
                                    <div class="text-danger" id="error_area"></div>


                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Ko‘zlanayotgan ijara muddati (yil)</span>
                                        </div>
                                        <input id="amount" type="number" v-model="period" class="form-control">

                                    </div>
                                    <div class="text-danger" v-if="errors">{{ errors.period }}</div>
                                    <div class="text-danger" id="error_amount"></div>


                                    <div class="text-danger" id="error"></div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close1" data-dismiss="modal">Bekor qilish
                        </button>
                        <button type="submit" class="btn d-block btn-primary" @click="submit()" id="submit"
                                style="color:white">Taklif kiritish
                        </button>
                    </div>

                </div>

            </div>

        </div>

    </div>

</template>

<script>

import Sidebar from "../Sidebar";
import 'vue-select/dist/vue-select.css';
import L from 'leaflet';
import {LMap, LTileLayer, LMarker, LControlZoom, LGeoJson, LPopup, LIcon, LControl} from 'vue2-leaflet';
import vt from "../../../../public/assets/js/leaflet-geojson-vt"
import snoopy from "../../../../public/assets/js/snoopy";
import {Icon} from 'leaflet';

delete Icon.Default.prototype._getIconUrl;
import customIcon from "../../../../public/image/marker.png"

export default {
    name: "Map",
    data() {
        return {
            land_purposes: [],
            map: null,
            selectedLands: [],
            selectedLandAreas: 0,
            regions: [],
            districts: [],
            lands: [],
            zoom: 6,
            center: [41.66655, 66.3235],
            selectedLand: null,
            url: "http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}",
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution:
                '<a target="_blank" href="http://www.agro.uz"> www.agro.uz &copy; AgroDigital</a>',
            selectedRegion: null,
            selectedDistrict: null,
            geojson1: null,
            geojson2: null,
            options: {
                zoomControl: false,
            },
            layerGroup: new L.LayerGroup(),
            currentLatLng: [0, 0],
            customIcon,
            layer: null,
            geojsonStyle: {
                fillColor: "#0090ff",
                color: "#000",
                weight: 1,
                opacity: 1,
                fillOpacity: 0.5,
            },
            showConfirm: false,
            drawType: 1,
            drawnLayer: null,
            period: null,
            land_purpose: null,
            errors: null

        };
    },
    components: {
        LMap,
        LTileLayer,
        LMarker,
        LControlZoom,
        LGeoJson,
        Sidebar,
        LPopup,
        LIcon,
        LControl
    },
    methods: {
        getRegionById(id) {
            for (let i = 0; i < this.regions.length; i++) {
                if (this.regions[i].regioncode === id)
                    return this.regions[i];

            }
            return false
        },
        getDistrictById(id) {
            for (let i = 0; i < this.districts.length; i++) {
                if (this.districts[i].id === id)
                    return this.districts[i];
            }
            return false

        },
        getRegions() {
            axios.get('/api/json/regions')
                .then(response => {
                    this.regions = response.data ?? []
                    this.regions.push({
                        id: 0,
                        nameuz: this.$t("main.holat.region"),
                        regioncode: 0

                    })
                    this.selectedRegion = this.selectedRegion ?? 0
                    this.districts.push({
                        id: 0,
                        nameuz: "Tuman (shaxar)",
                        regioncode: 0
                    })
                    this.selectedDistrict = this.selectedDistrict ?? 0

                })
        },
        getDistricts(regioncode) {
            axios.get(`/api/json/districts/${regioncode}`)
                .then(response => {
                    this.districts = response.data

                })
        },
        setDistricts() {
            this.districts = []
            this.getDistricts(this.selectedRegion)
            this.getRegionGeoJSON(this.selectedRegion)

        },
        setMap() {
            axios.get(`/api/json/district/${this.selectedDistrict}`)
                .then(response => {
                    var geojson = response.data
                    this.makeGeoJSON(geojson)
                })
            this.addControls()
            this.removeMarkers()
            // this.drawLandsByStatus(this.selectedDistrict, 2)
            // this.drawLandsByStatus(this.selectedDistrict, 3)
            // this.drawLandsByStatus(this.selectedDistrict, 4)
            // this.drawLandsByStatus(this.selectedDistrict, 5)
            this.drawCadLands(this.getCadNum(this.selectedDistrict))
            this.drawLands(this.selectedDistrict)

            if (this.geojson1 && this.geojson2) {
                this.layerGroup.addLayer(this.geojson1);
                this.layerGroup.addLayer(this.geojson2);
            }
        },
        getCadNum(id) {
            var data = this.districts
            for (let i = 0; i < data.length; i++)
                if (id === data[i].id)
                    return data[i].cad_num

        },
        getRegionGeoJSON($region) {
            axios.get(`/api/json/regions/${$region}`)
                .then(response => {
                    var geojson = response.data
                    this.makeGeoJSON(geojson)
                })
        },
        makeGeoJSON(geojson) {
            this.removeMarkers()
            this.removeMarkers2()
            let geoJSON = L.geoJSON(geojson,
                {
                    invert: true,
                    onEachFeature: function (feature, layer) {
                        layer.myTag = "myGeoJSON"
                    }
                }).addTo(this.$refs.map.mapObject)

            this.$refs.map.mapObject.fitBounds(geoJSON.getBounds());
        },
        removeMarkers2() {
            if (this.geojson1 && this.geojson2) {
                this.layerGroup.removeLayer(this.geojson1);
                this.layerGroup.removeLayer(this.geojson2);
            }
        },
        removeMarkers() {
            var map = this.$refs.map.mapObject
            map.eachLayer(function (layer) {
                if (layer.myTag && layer.myTag === "myGeoJSON") {
                    map.removeLayer(layer)
                }

            });
            this.removeMarkers2()
        },
        drawLands(id) {
            var This = this
            axios.get(`/api/geojson/lands/${id}`, {params: {status: 1}})
                .then(response => {
                    var lands = response.data

                    var options = {
                        maxZoom: 20,
                        tolerance: 3,
                        debug: 0,
                        style: this.geojsonStyle,
                        onEachFeature: function (feature, layer) {

                            layer.on('mouseover', function (e) {
                                if (!This.selectedLands.includes(feature.properties.id)) {
                                    layer.setStyle({
                                        color: '#2262CC'
                                    });
                                }
                            })
                            layer.on("mouseout", function (e) {
                                if (!This.selectedLands.includes(feature.properties.id)) {
                                    layer.setStyle(This.geojsonStyle);
                                }
                            });
                            layer.on('click', function (e) {
                                layer.setStyle({
                                    fillColor: "#11ff00",
                                });
                                This.layer = layer
                                This.selectedLand = feature
                                This.currentLatLng = e.latlng
                                // This.$refs.marker.mapObject.openPopup()
                                This.selectLand(feature, layer)
                            })

                        }
                    };
                    this.geojson1 = L.geoJson(lands.data, options).addTo(this.$refs.map.mapObject);
                })

        },
        drawLandsByStatus(id, status) {
            axios.get(`/api/geojson/lands/${id}`, {params: {status}})
                .then(response => {
                    var lands = response.data.data
                    var fillColor = null
                    switch (status) {
                        case 2:
                            fillColor = "#ffc800";
                            break;
                        case 3:
                            fillColor = "#8000ff";
                            break;
                        case 4:
                            fillColor = "#824800";
                            break;
                        case 5:
                            fillColor = "#ff5f00";
                            break;
                    }
                    var geojsonStyle = {
                        fillColor,
                        color: "#000",
                        weight: 1,
                        opacity: 1,
                        fillOpacity: 1,
                    };

                    var options = {
                        maxZoom: 20,
                        tolerance: 3,
                        debug: 0,
                        style: geojsonStyle,

                    };
                    if (lands.features !== null)
                        vt(lands, options).addTo(this.$refs.map.mapObject);
                })
        },
        drawCadLands(prefix) {
            axios.get(`https://api.agro.uz/gis_bridge/eijara`, {params: {prefix}})
                .then(response => {
                    var lands = response.data[0]

                    var geojsonStyle = {
                        fillColor: "#ff0000",
                        color: "#000",
                        weight: 1,
                        opacity: 1,
                        fillOpacity: 0.7,
                    };

                    var options = {
                        maxZoom: 20,
                        tolerance: 3,
                        debug: 0,
                        style: geojsonStyle,

                    };
                    if (lands.features !== null)
                        this.geojson2 = vt(lands, options).addTo(this.$refs.map.mapObject);
                })

        },
        drawLandFromParam($land) {
            axios.get(`/api/geojson/land/${$land}`,)
                .then(response => {
                    response
                    this.removeMarkers()
                    var lands = response.data

                    var options = {
                        maxZoom: 20,
                        tolerance: 3,
                        debug: 0,
                        style: this.geojsonStyle
                    };

                    var geojson = {
                        geometry: lands.data[0].geometry,
                        type: "Feature",
                        properties: {
                            name: $land

                        }
                    }

                    geojson = vt(geojson, options).addTo(this.$refs.map.mapObject);
                    5
                    this.$refs.map.mapObject.fitBounds(geojson.getBounds());

                })

        },
        selectLand(feature, layer) {
            if (this.drawnLayer)
                this.$refs.map.mapObject.removeLayer(this.drawnLayer)
            if (this.drawType !== 1) {
                this.selectedLandAreas = 0
                this.selectedLands = []
            }
            if (!this.selectedLands.includes(feature.properties.id)) {
                this.$refs.map.mapObject.closePopup();
                this.selectedLands.push(feature.properties.id)
                this.selectedLandAreas += parseInt(feature.properties.area)

            } else {
                this.$refs.map.mapObject.closePopup();
                var index = this.selectedLands.indexOf(feature.properties.id)
                this.selectedLands.splice(index)
                layer.setStyle(this.geojsonStyle);
                if (this.selectedLandAreas)
                    this.selectedLandAreas -= parseInt(feature.properties.area)
            }


            this.drawType = 1
        },
        addControls() {
            this.$refs.map.mapObject.pm.addControls({
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
                removalMode: false
            });
        },
        confirm() {
            $("#values_modal").modal('show')
        },
        sendData() {
            var token = window.localStorage.getItem("token")
            var data = {
                region_id: this.getRegionById(this.selectedRegion).id,
                district_id: this.selectedDistrict,
                draw_type: this.drawType,
                land_purpose_id: this.land_purpose,
                period: this.period,
                geometry: this.drawnLayer ? this.drawnLayer.toGeoJSON() : null,
                lands: this.selectedLands
            }
            var This = this
            axios.post("/api/applications/store", data,
                {
                    headers: {
                        Authorization: `Bearer ${token}`
                    }
                }
            )
                .then(response => {
                    if (response.data.ok) {
                        This.errors = null
                        This.$router.push({name: "dashboard.application"})
                        This.$swal('Taklif qabul qilindi!', 'Taklifingizni ko\'rib chiqish holatini 12345 tekshiruv kodi yordamida kuzatib borishingiz mumkin', 'success');
                        $('.modal').modal('hide')
                    } else {
                        console.log(response.data.errors);
                        This.errors = response.data.errors
                    }
                })
        },


        submit() {
            this.sendData()
        }
    },


    mounted() {
        this.getRegions()
        if (this.$route.query.land) {
            this.drawLandFromParam(this.$route.query.land)
        }
        snoopy()

        $(".close1").click(function () {
            $(".modal").modal('hide')
        })
        var map = this.$refs.map.mapObject
        var This = this
        map.on('pm:create', function (e) {
            if (This.drawnLayer)
                map.removeLayer(This.drawnLayer)
            let geojson = e.layer.toGeoJSON().geometry.coordinates[0]
            This.drawnLayer = e.layer
            var latlong = [geojson[0][1], geojson[0][0]]
            var seeArea = turf.area(e.layer.toGeoJSON());
            seeArea = Math.round(seeArea)
            seeArea = Math.round(seeArea / 10000)
            var dataJSON = e.layer.toGeoJSON()
            This.selectedLands = [1]
            This.selectedLandAreas = seeArea
            This.drawType = 0
            if (This.geojson1)
                This.geojson1.setStyle(this.geojsonStyle)

        })


        axios.get('/api/land_purposes').then(resp => {
            this.land_purposes = resp.data.data
        });
    }

}
</script>

<style scoped>

.vue2leaflet-map {
    height: 400px;
}

.select-2 {
    height: 48px;
    width: 237px;
    border-radius: 8px;
}

.d-flex {
    gap: 24px;
}

.map {
    margin-top: 16px;
    border-radius: 12px;
    overflow: hidden;
}

.check-offer {

    margin: 20px auto;
    background: #08705F;
    border-radius: 8px;
    color: white;
    border: 1px solid #08705F;
    width: 310px;
    text-align: center;
    padding: 12px;
    transition: 0.2s;
    text-decoration: none;
    cursor: pointer;
    font-size: 18px;
}

.check-offer:hover {

    background: white;
    color: #08705F;
}

</style>
