<template>
    <div>
        <b-overlay
            id="overlay-background"
            :variant="variant"
            :opacity="opacity"
            :blur="blur"
            :show="show" rounded="lg">
        <section class="land-details p-0 mg-b-30">
            <div class="container-fluid minh">

                    <div class="row">
                        <l-map
                            @update:zoom="zoomUpdated"
                            @update:center="centerUpdated"
                            @update:bounds="boundsUpdated"
                            ref="mymap"
                            style="height: 58vh"
                            :zoom="zoom"
                            :center="center">
                            <l-geo-json v-for="land in lands"
                                        v-bind:data="land.id"
                                        v-bind:key="land.text"
                                        :options="mapOptions"
                                        :geojson="land.geometries"
                                        @add="$nextTick(() => $event.target.openPopup())"
                            ></l-geo-json>
                            <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
                        </l-map>

                    </div>


            </div>

        </section>
        </b-overlay>
    </div>

</template>

<script>


function onEachFeature(feature, layer) {
    var v = this;

}


import "leaflet-sidebar-v2";
import "leaflet-sidebar-v2/css/leaflet-sidebar.css";
import {featureGroup} from "leaflet";
import 'leaflet-fullscreen/dist/leaflet.fullscreen.css';
import 'leaflet-fullscreen/dist/Leaflet.fullscreen';
import moment from 'moment'


export default {
    name: "Map",
    data() {
        return {
            show: true,
            variant: 'light',
            opacity: 0.85,
            blur: '2px',
            variants: [
                'transparent',
                'white',
                'light',
                'dark',
                'primary',
                'secondary',
                'success',
                'danger',
                'warning',
                'info',
            ],
            blurs: [
                { text: 'None', value: '' },
                '1px',
                '2px',
                '5px',
                '0.5em',
                '1rem'
            ],
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
                '<a target="_blank" href="http://wwww.agro.uz"> wwww.agro.uz &copy; AgroDigital</a>',
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
                        color: returnColor(feature.properties.status_code),
                        fillOpacity: 0.1
                    };
                },
                onEachFeature: onEachFeature.bind(this),
            }
        }
    },
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
                        this.count_all += element.lands.length;
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
        GetGeojsons() {
            this.show = false;
            axios.get('/api/lands', {
                params: {
                    map: true,
                    regionid: this.region,
                    districtid: this.district
                }
            }).then(response => {
                this.lands = response.data.data;
                if (this.lands.length > 0) {
                    this.show = false;
                    this.$nextTick().then(() => {
                        var group = new featureGroup();

                        this.$refs.mymap.mapObject.eachLayer(function (layer) {
                            if (layer.feature != undefined)
                                group.addLayer(layer);
                        });

                        this.$refs.mymap.mapObject.fitBounds(group.getBounds(), {padding: [20, 20]});
                    });
                }
            })
                .catch(error => {
                    console.log(error);
                })
        },
        GetGeojsonsByParam(region, district) {
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
            })
                .catch(error => {
                    console.log(error);
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
            return moment(date).format('D.M.Y, h:mm:ss');
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
        this.GetRegions();
        this.landPurposes();
        if (typeof this.$route.params.id === 'undefined') {
            this.GetGeojsons();

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
