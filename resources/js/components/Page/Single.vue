<template>
    <section class="land-details mg-t-45 mg-b-30">
        <div class="container minh">
            <div class="slim-pageheader">
                <ol class="breadcrumb slim-breadcrumb">
                    <li class="breadcrumb-item">
                        <router-link exact :to="{ name : 'index'}">Бош саҳифа</router-link>
                    </li>
                    <li class="breadcrumb-item">
                        <router-link exact :to="{ name : 'index'}">Лотлар</router-link>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ land.regnum }}</li>
                </ol>
            </div>
            <div class="row">
                <div id="single-land" class="col-md-8">
                    <div class="up-content clearfix">
                        <h2>{{ land.fond_type.name }}</h2>
                        <span>{{ land.regnum }}</span>
                    </div>
                    <l-map style="height: 300px;margin-top: 50px;margin-bottom: 50px"
                           :zoom="zoom"
                           :center="center"

                    >
                        <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
                        <!--                    <l-polygon v-for="item in land.geometries" :lat-lngs="item.geom.coordinates"-->
                        <!--                               color="green"></l-polygon>-->
                        <l-geo-json :geojson="land.geometries"></l-geo-json>
                    </l-map>
                    <div class="tab">
                        <div>
                            <b-card no-body>
                                <b-tabs class="tab-links" content-class="tabs mt-4">
                                    <b-tab active title="Умумий маълумотлар"><p></p></b-tab>
                                    <b-tab title="Лойиҳа ҳужжатлари">
                                        <div class="more-info">
                                            <div class="row">
                                                <div class="first-info col-md-4">
                                                    <h4>Enterainment</h4>
                                                    <ul>
                                                        <li><i class="fa fa-check"></i>Central Locking</li>
                                                        <li><i class="fa fa-check"></i>Automatic Air Conditioning</li>
                                                    </ul>
                                                </div>
                                                <div class="second-info col-md-4">
                                                    <h4>exterior features</h4>
                                                    <ul>
                                                        <li><i class="fa fa-check"></i>Parking Sensors</li>
                                                        <li><i class="fa fa-check"></i>Double Exhaust</li>
                                                    </ul>
                                                </div>
                                                <div class="third-info col-md-4">
                                                    <h4>interior features</h4>
                                                    <ul>
                                                        <li><i class="fa fa-check"></i>ABS</li>
                                                        <li><i class="fa fa-check"></i>Xenon Headlights</li>
                                                        <li><i class="fa fa-check"></i>Immobilizer</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </b-tab>
                                    <b-tab title="Хулосалар">
                                        <div class="more-info">
                                            <div class="row">
                                                <div class="first-info col-md-4">
                                                    <h4>Enterainment</h4>
                                                    <ul>
                                                        <li><i class="fa fa-check"></i>Central Locking</li>
                                                        <li><i class="fa fa-check"></i>Automatic Air Conditioning</li>
                                                    </ul>
                                                </div>
                                                <div class="second-info col-md-4">
                                                    <h4>exterior features</h4>
                                                    <ul>
                                                        <li><i class="fa fa-check"></i>Parking Sensors</li>
                                                        <li><i class="fa fa-check"></i>Double Exhaust</li>
                                                    </ul>
                                                </div>
                                                <div class="third-info col-md-4">
                                                    <h4>interior features</h4>
                                                    <ul>
                                                        <li><i class="fa fa-check"></i>ABS</li>
                                                        <li><i class="fa fa-check"></i>Xenon Headlights</li>
                                                        <li><i class="fa fa-check"></i>Immobilizer</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </b-tab>
                                    <b-tab title="Очиқ харита"><p> Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Excepturi in dolorem
                                        blanditiis voluptatibus quidem nisi eaque, cupiditate minus omnis, voluptatum
                                        corporis neque placeat quod temporibus mollitia. Quod accusamus iure eveniet
                                        laboriosam laudantium.</p></b-tab>
                                </b-tabs>
                            </b-card>
                        </div>
                        <!--                        <div class="tabs">-->
                        <!--                            <ul class="tab-links">-->
                        <!--                                <li class="active"><a href="#tab1">Умумий маълумотлар</a></li>-->
                        <!--                                <li><a href="#tab2">Лойиҳа ҳужжатлари</a></li>-->
                        <!--                                <li><a href="#tab3">Хулосалар</a></li>-->
                        <!--                                <li><a href="#tab4">Очиқ харита</a></li>-->
                        <!--                            </ul>-->
                        <!--                            <div class="tab-content">-->
                        <!--                                <div id="tab1" class="tab active">-->
                        <!--                                    <p></p>-->
                        <!--                                </div>-->
                        <!--                                <div id="tab2" class="tab">-->
                        <!--                                    <div class="more-info">-->
                        <!--                                        <div class="row">-->
                        <!--                                            <div class="first-info col-md-4">-->
                        <!--                                                <h4>Enterainment</h4>-->
                        <!--                                                <ul>-->
                        <!--                                                    <li><i class="fa fa-check"></i>Central Locking</li>-->
                        <!--                                                    <li><i class="fa fa-check"></i>Automatic Air Conditioning</li>-->
                        <!--                                                </ul>-->
                        <!--                                            </div>-->
                        <!--                                            <div class="second-info col-md-4">-->
                        <!--                                                <h4>exterior features</h4>-->
                        <!--                                                <ul>-->
                        <!--                                                    <li><i class="fa fa-check"></i>Parking Sensors</li>-->
                        <!--                                                    <li><i class="fa fa-check"></i>Double Exhaust</li>-->
                        <!--                                                </ul>-->
                        <!--                                            </div>-->
                        <!--                                            <div class="third-info col-md-4">-->
                        <!--                                                <h4>interior features</h4>-->
                        <!--                                                <ul>-->
                        <!--                                                    <li><i class="fa fa-check"></i>ABS</li>-->
                        <!--                                                    <li><i class="fa fa-check"></i>Xenon Headlights</li>-->
                        <!--                                                    <li><i class="fa fa-check"></i>Immobilizer</li>-->
                        <!--                                                </ul>-->
                        <!--                                            </div>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                                <div id="tab3" class="tab">-->
                        <!--                                    <div class="more-info">-->
                        <!--                                        <div class="row">-->
                        <!--                                            <div class="first-info col-md-4">-->
                        <!--                                                <h4>Enterainment</h4>-->
                        <!--                                                <ul>-->
                        <!--                                                    <li><i class="fa fa-check"></i>Central Locking</li>-->
                        <!--                                                    <li><i class="fa fa-check"></i>Automatic Air Conditioning</li>-->
                        <!--                                                </ul>-->
                        <!--                                            </div>-->
                        <!--                                            <div class="second-info col-md-4">-->
                        <!--                                                <h4>exterior features</h4>-->
                        <!--                                                <ul>-->
                        <!--                                                    <li><i class="fa fa-check"></i>Parking Sensors</li>-->
                        <!--                                                    <li><i class="fa fa-check"></i>Double Exhaust</li>-->
                        <!--                                                </ul>-->
                        <!--                                            </div>-->
                        <!--                                            <div class="third-info col-md-4">-->
                        <!--                                                <h4>interior features</h4>-->
                        <!--                                                <ul>-->
                        <!--                                                    <li><i class="fa fa-check"></i>ABS</li>-->
                        <!--                                                    <li><i class="fa fa-check"></i>Xenon Headlights</li>-->
                        <!--                                                    <li><i class="fa fa-check"></i>Immobilizer</li>-->
                        <!--                                                </ul>-->
                        <!--                                            </div>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                                <div id="tab4" class="tab">-->
                        <!--                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi in dolorem-->
                        <!--                                        blanditiis voluptatibus quidem nisi eaque, cupiditate minus omnis, voluptatum-->
                        <!--                                        corporis neque placeat quod temporibus mollitia. Quod accusamus iure eveniet-->
                        <!--                                        laboriosam laudantium.</p>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                    </div>
                </div>
                <div id="left-info" class="col-md-4">
                    <div class="enquiry">
                        <div class="head-side-bar">
                            <h4>Таклиф жўнатиш</h4>
                        </div>
                        <div class="contact-form">
                            <p>Мазкур ер участкаси бўйича Сиз асослантирилган таклифларни жўнатишингиз мумкин.</p>
                            <input type="text" class="name" name="s" placeholder="Исм-шарифингиз" value="">
                            <input type="text" class="phone" name="s" placeholder="Телефон рақам" value="">
                            <textarea id="message" class="message" name="message" placeholder="Таклиф..."></textarea>
                            <div class="advanced-button">
                                <a href="#">Жўнатиш<i class="fa fa-paper-plane"></i></a>
                            </div>
                        </div>

                        <div class="subhead-side-bar">
                            <h4>Маълумот учун</h4>
                        </div>
                        <div class="call-info">
                            <i class="fa fa-phone"></i>
                            <h6>+998 71 202 0202</h6>
                            <p>Ички рақам: <span>5563</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Single",
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
            zoom: 13,
            center: [67.237035371, 39.449269626]

        }
    },
    methods: {
        GetLand() {
            axios.get('/api/lands/' + this.$route.params.id)
                .then(response => {
                    this.land = response.data.data;
                    this.center = [this.land.geometries.features[0].geometry.coordinates[0][0][1], this.land.geometries.features[0].geometry.coordinates[0][0][0]];
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

<style scoped>

</style>
