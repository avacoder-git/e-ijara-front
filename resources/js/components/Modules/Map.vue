<template>
    <div>
        <div class="bg-white">
            <div class="container-fluid section-2">
                <h1>Ochiq xarita</h1>

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
                :zoom="zoom"
                :center="center">
                <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
                <l-control-zoom position="bottomright"></l-control-zoom>

            </l-map>

        </div>

    </div>
</template>

<script>


import 'vue-select/dist/vue-select.css';
import L from 'leaflet';
import {LMap, LTileLayer, LMarker, LControlZoom, LGeoJson} from 'vue2-leaflet';


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
            url: "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
            attribution:
                '<a target="_blank" href="http://www.agro.uz"> www.agro.uz &copy; AgroDigital</a>',
            selectedRegion: null,
            selectedDistrict: null,
            geojsonStyle: {
                fillColor: "#ff0000",
                color: "#000",
                weight: 1,
                opacity: 1,
                fillOpacity: 0.7,
            },
            options: {
                maxZoom: 20,
                tolerance: 3,
                debug: 0,
                // style: geojsonStyle
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
            axios.get('api/json/regions')
                .then(response => {
                    this.regions = response.data
                    this.regions.push({
                        id: 0,
                        nameuz: "Xudud",
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
            axios.get(`api/json/districts/${regioncode}`)
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
            axios.get(`api/json/district/${this.selectedDistrict}`)
                .then(response => {
                    var geojson = response.data
                    this.makeGeoJSON(geojson)
                })
            this.drawLands(this.selectedDistrict)

        },

        getRegionGeoJSON($region) {
            axios.get(`api/json/regions/${$region}`)
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

        drawLands(district_id) {
            axios.get(`/api/geojson/lands/${district_id}`)
                .then(response => {
                    this.removeMarkers()
                    var data = response.data.data

                    get(layer)
                    {
                        console.log(layer);
                    }

                    for (let i = 0; i < data.length; i++) {
                        L.geoJSON(data[i].geojson,
                            {
                                onEachFeature: function (feature, layer) {
                                    layer.myTag = "myGeoJSON",
                                    layer.id = data[i].id,
                                        layer.on('click', function (e) {
                                            featureLayer.bindPopup(feature.properties.name);
                                        });
                                }
                            }).addTo(this.$refs.map.mapObject)
                    }
                })

        },
        removeMarkers() {
            var map = this.$refs.map.mapObject
            map.eachLayer(function (layer) {
                if (layer.myTag && layer.myTag === "myGeoJSON") {
                    map.removeLayer(layer)
                }

            });

        },


    },


    mounted() {
        this.getRegions()
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
