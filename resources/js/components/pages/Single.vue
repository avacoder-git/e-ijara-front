<template>
    <div>
        <main>
            <!-- Breadcrumbs -->
            <div class="container g-pt-50 g-pb-80">
                <ul class="u-list-inline g-font-weight-500 mb-2">
                    <li class="list-inline-item g-mr-5">
                        <router-link exact class="u-link-v5 g-color-gray-dark-v5 g-color-main--hover"
                                     :to="{ name:'index' }">Бош саҳифа
                        </router-link>
                        <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
                    </li>
                    <li class="list-inline-item g-mr-5">
                        <router-link exact class="u-link-v5 g-color-gray-dark-v5 g-color-main--hover"
                                     :to="{name:'lot.lots'}">Танловлар
                        </router-link>
                        <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
                    </li>
                    <li class="list-inline-item g-color-gray-dark-v5">
                        <span>{{ land.regnum }}</span></li>
                </ul>
                <h1 class="h3 mb-0">{{ land.address }}</h1>
            </div>
            <!-- End Breadcrumbs -->
            <!-- Listing - Main Info -->
            <div class="container g-mb-30">
                <div class="row">
                    <div class="col-md-8 g-mb-30">
                        <div class="row">
                            <!-- Listing - List of Details -->
                            <ul class="col-md-12 list-unstyled g-font-weight-600 mb-0">
                                <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                                    <span class="g-color-text g-font-size-13">Ҳолати:</span>
                                    <span class="float-right g-color-green">{{ land.status.name }}</span>
                                </li>
                                <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                                    <span class="g-color-text g-font-size-13">Ижара мақсади:</span>
                                    <span class="float-right g-color-black"> land.purpose.name </span>
                                </li>
                                <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                                    <span class="g-color-text g-font-size-13">Манзил:</span>
                                    <span class="float-right g-color-black">{{ land.address }}</span>
                                </li>
                                <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                                    <span class="g-color-text g-font-size-12">Ихтисослик:</span>
                                    <span class="float-right g-color-black">{{ land.fond_type.name }}</span>
                                </li>
                            </ul>
                            <!-- End Listing - List of Details -->
                        </div>
                        <!-- Listing - Numbers -->
                        <div class="g-brd-top g-brd-gray-light-v3 g-pt-20 g-mt-40">
                            <div class="row">
                                <div class="col-sm-6 g-brd-right--sm g-brd-gray-light-v3 g-mb-30 g-mb-0--sm">
                                    <h2 class="h5">Майдони</h2>
                                    <span class="d-block g-font-weight-600 g-font-size-25">{{ land.area }} <span
                                        class="g-color-text g-font-size-15">Га</span></span>
                                    <span class="d-block g-color-text">ўртача шўрланган</span>
                                </div>
                                <div class="col-sm-6 g-mb-20 g-mb-0--sm">
                                    <div class="g-pl-30--md">
                                        <h2 class="h5">Ижара муддати</h2>
                                        <span class="d-block g-font-weight-600 g-font-size-25">10-15 <span
                                            class="g-color-text g-font-size-15">йил</span></span>
                                        <span class="d-block g-color-text">Балл бонитети {{ land.ball_bonitet }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Listing - Numbers -->
                    </div>
                    <div class="col-md-4 g-mb-30">
                        <!-- Listing - Agents -->
                        <div class="u-shadow-v11 text-center">
                            <div class="g-pa-20">
                                <div
                                    class="js-countdown u-countdown-v1 text-center text-uppercase g-color-primary g-line-height-1">
                                    <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                        <Countdown deadline="2022/08/09"></Countdown>
                                    </div>
                                </div>
                            </div>
                            <a href="http://e-auksion.uz    "
                               class="btn btn-xl u-btn-primary u-btn-content g-font-weight-600 g-letter-spacing-0_5 rounded-0 text-uppercase g-brd-2 g-mr-10 g-mb-15">
                                <i class="icon-real-estate-089 u-line-icon-pro pull-left g-font-size-42 g-mr-10"></i>
                                <span class="float-right text-left">
                                Ариза топшириш
                                <span class="d-block g-font-size-11">{{ land.regnum }}</span>
                            </span>
                            </a>
                        </div>
                        <!-- End Listing - Agents -->
                    </div>
                </div>
                <!-- Listing - Additional Info -->
                <div class="g-bg-secondary g-px-30 g-py-20">
                    <div class="row align-items-center">
                        <div class="col-lg-5 g-mb-25 g-mb-0--lg">
                            <!-- Listing - Share -->
                            <div class="d-flex align-items-center">
                                <h3 class="h6 g-font-weight-600 mr-4 mb-0">Тавсия қилинг:</h3>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item g-mx-2">
                                        <a class="u-icon-v3 g-width-35 g-height-35 g-color-text g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-13"
                                           href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-2">
                                        <a class="u-icon-v3 g-width-35 g-height-35 g-color-text g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-13"
                                           href="#">
                                            <i class="fa fa-paper-plane"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <!-- End Listing - Share -->
                        </div>
                        <div class="col-lg-7">
                            <!-- Listing - Share -->
                            <div class="d-flex align-items-center float-lg-right">
                                <ul class="list-inline g-color-text g-font-weight-600 g-font-size-13 mb-0">
                                    <li class="list-inline-item mr-0">Лот ID: <span
                                        class="g-font-weight-400">{{ land.regnum }}</span>
                                    </li>
                                    <li class="list-inline-item g-mx-40">Эълон қилинган сана: <span
                                        class="g-font-weight-400">21.08.2021</span></li>
                                    <li class="list-inline-item mr-0">Кўришлар сони: <span
                                        class="g-font-weight-400">67</span></li>
                                </ul>
                            </div>
                            <!-- End Listing - Share -->
                        </div>
                    </div>
                </div>
                <!-- End Listing - Additional Info -->
                <l-map style="height: 300px;margin-top: 50px;margin-bottom: 50px"
                       :zoom="zoom"
                       :center="center"

                >
                    <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
                    <!--                    <l-polygon v-for="item in land.geometries" :lat-lngs="item.geom.coordinates"-->
                    <!--                               color="green"></l-polygon>-->
                    <l-geo-json :geojson="land.geometries"></l-geo-json>
                </l-map>
            </div>
            <!-- End Listing - Main Info -->

        </main>
    </div>
</template>

<script>
import Countdown from '../Countdown.vue';
import {latLngBounds} from "leaflet";

export default {
    components: {Countdown},
    data() {
        return {
            land: {
                address: '',
                area: '',
                area_specialization: '',
                ball_bonitet: '',
                cad_number: '',
                geometries: null,
                district: {
                    admincenterru: '',
                    admincenteruz: '',
                    areacode: '',
                    areaid: '',
                    areatype: '',
                    id: '',
                    isdeleted: '',
                    nameru: '',
                    nameuz: '',
                    regionid: '',
                },
                fond_type: {
                    created_at: '',
                    description: '',
                    id: '',
                    name: '',
                    updated_at: '',
                },
                id: '',
                irrigation_status: '',
                is_epxired: '',
                land_purpose: {
                    name: '',
                },
                land_type: {
                    created_at: '',
                    description: '',
                    id: '',
                    name: '',
                    updated_at: '',
                },
                other_info: '',
                period: '',
                real_status: '',
                region: {
                    admincenterru: '',
                    admincenteruz: '',
                    codecyr: '',
                    codelat: '',
                    id: '',
                    isdeleted: '',
                    nameru: '',
                    nameuz: '',
                    regioncode: '',
                    regioncode2: '',
                    regionid: '',
                },
                regnum: '',
                status: {
                    code: '',
                    created_at: '',
                    description: '',
                    id: '',
                    name: '',
                    updated_at: '',
                },
                tries: '',
                water_supply_level: '',
            },
            url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            attribution:
                '&copy; <a target="_blank" href="http://osm.org/copyright">OpenStreetMap</a> contributors',
            zoom: 12,
            center: [39.449269626,67.237035371 ]

        }
    },
    methods: {
        GetLand() {
            axios.get('/api/lands/' + this.$route.params.id)
                .then(response => {
                    this.land = response.data.data;
                    this.center = [this.land.geometries.features[0].geometry.coordinates[0][0][1],this.land.geometries.features[0].geometry.coordinates[0][0][0]];
                }).catch(error => {
                if (error.response.status == 404) {
                    this.$router.push({name: 'notfound'})

                }

            })
        },

    },
    mounted() {
        this.GetLand();

    }
}
</script>
