<template>
    <div>
        <div class="bg-white">
            <div class="container-fluid section-2">
                <h1>{{ $t("nav.links.map") }}</h1>

                <div class="tab-menu">
                    <button class="tab-btn active">Umumiy xarita</button>
                    <button class="tab-btn">Yer uchastkalari</button>
                </div>

                <div class="d-flex mt-3">
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
        </div>

        <div class="container-fluid mt-4 section-2">
            <l-map
                ref="map"
                :options="options"
                :zoom="zoom"
                :center="center">
                <l-tile-layer :maxZoom="maxZoom" :subdomains="subdomains"  :url="url"
                              :attribution="attribution"></l-tile-layer>
                <l-control-zoom position="bottomright"></l-control-zoom>

            </l-map>

        </div>

    </div>
</template>

<script>


import 'vue-select/dist/vue-select.css';
import L from 'leaflet';
import {LMap, LTileLayer, LMarker, LControlZoom, LGeoJson, LGridLayer} from 'vue2-leaflet';
import vt from "../../../../public/assets/js/leaflet-geojson-vt"
import turf from "@turf/turf"


export default {
    name: "Map",
    data() {
        return {
            map: null,
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
            geojsonStyle: {
                fillColor: "#0090ff",
                color: "#000",
                weight: 1,
                opacity: 1,
                fillOpacity: 0.7,
            },
            options: {
                zoomControl: false,

                // style: geojsonStyle
            },

            mapOptions: {
                style: function style(feature) {
                    return {
                        weight: 4,
                        fill: 'url(/img/land_bg.png)',
                        // opacity: 0.7,
                        // fillColor:'#000',
                        color: '#189987',
                        fillOpacity: 0.5
                    };
                },
            }

        };
    },
    components: {
        LMap,
        LTileLayer,
        LMarker,
        LControlZoom,
        LGeoJson
    },
    methods: {
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
            this.drawLands(this.selectedDistrict)
            this.drawCadLands(this.getCadNum(this.selectedDistrict))

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
            let geoJSON = L.geoJSON(geojson,
                {
                    invert: true,
                    style: {
                        color: 'transparent',
                        fillColor: 'transparent'

                    }
                }).addTo(this.$refs.map.mapObject)

            this.$refs.map.mapObject.fitBounds(geoJSON.getBounds());
        },


        removeMarkers() {
            var map = this.$refs.map.mapObject
            map.eachLayer(function (layer) {
                if (layer.myTag && layer.myTag === "myGeoJSON") {
                    map.removeLayer(layer)
                }

            });

        },
        drawLands(id) {
            axios.get(`/api/geojson/lands/${id}`, {params: {not_null : 0}})
                .then(response => {
                    this.removeMarkers()
                    var lands = response.data

                    var options = {
                        maxZoom: 20,
                        tolerance: 3,
                        debug: 0,
                        style: this.geojsonStyle,
                    };
                    vt(geojson, options).addTo(this.$refs.map.mapObject);


                })

        },
        drawCadLands(prefix) {
            axios.get(`https://api.agro.uz/gis_bridge/eijara`, {params: {prefix}})
                .then(response => {
                    this.removeMarkers()
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
                        style: geojsonStyle
                    };
                    if (lands.features !== null)
                        vt(lands, options).addTo(this.$refs.map.mapObject);


                })

        },
        drawLandFromParam($land)
        {
            axios.get(`/api/geojson/land/${$land}`,)
                .then(response => {
                    response
                    this.removeMarkers()
                    var lands = response.data
                    var geojsonStyle = {
                        fillColor: "#0088ff",
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

                    var geojson = {
                        geometry: lands.data[0].geometry,
                        type: "Feature",
                        properties: {
                            name: $land

                        }
                    }
                    console.log(geojson);

                    geojson = vt(geojson, options).addTo(this.$refs.map.mapObject);
5
                    this.$refs.map.mapObject.fitBounds(geojson.getBounds());

                })

        }

    },


    mounted() {
        this.getRegions()
        if(this.$route.query.land)
        {
            this.drawLandFromParam(this.$route.query.land)
        }
        const map = this.$refs.map.mapObject;
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

</style>
