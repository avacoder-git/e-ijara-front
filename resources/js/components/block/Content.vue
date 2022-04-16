<template>
    <div>
        <div class="container g-py-50" id="app">
            <div class="row g-mb-40">
                <div v-for="land in lands" class="col-sm-6 col-lg-4 g-mb-30">
                    <!-- Lot -->
                    <article>
                        <div class="g-brd-x g-brd-gray-light-v3 g-bg-white">
                            <!-- Лотлар - Батафсил -->
                            <ul class="d-flex list-inline g-brd-y g-brd-gray-light-v3 mb-0">
                                <!-- Майдон -->
                                <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                    <i class="align-middle g-color-text mr-1 icon-real-estate-017 u-line-icon-pro"></i>
                                    {{ land.area }} Га
                                </li>
                                <!-- Балл бонитет -->
                                <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-brd-x g-brd-gray-light-v3 g-py-17 mr-0">
                                    <i class="align-middle g-color-text mr-1 icon-real-estate-030 u-line-icon-pro"></i>
                                    {{ land.ball_bonitet }}
                                </li>
                                <!-- Ижара муддати -->
                                <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                    <i class="align-middle g-color-text mr-1 icon-real-estate-035 u-line-icon-pro"></i>
                                    10-15 й.
                                </li>
                            </ul>
                            <!-- End Лотлар - Батафсил -->
                            <!-- Лотлар - Address -->
                            <div class="g-pa-25">
                                <h3 class="g-font-weight-600 g-font-size-16">{{ land.fond_type.name }}</h3>
                                <p class="g-font-size-13 mb-4">{{ land.address }}</p>
                                <p class="g-color-text g-font-weight-500 g-font-size-13 mb-0">Лот рақами: <span
                                    class="g-color-text g-color-primary g-font-weight-600">{{ land.regnum }}</span></p>
                                <p class="g-color-text g-font-weight-500 g-font-size-13 mb-1">Ижара тури: <span
                                    class="g-color-text g-font-weight-400">{{ land.land_type.name }}</span></p>
                            </div>
                            <!-- End Лотлар - Address -->
                            <!-- Лотлар - Батафсил -->
                            <div
                                class="g-brd-gray-light-v3 g-brd-top js-countdown u-countdown-v1 text-center text-uppercase g-color-primary g-line-height-1">
                                <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                    <Countdown end="2022/08/09"></Countdown>
                                </div>
                            </div>
                            <!-- End Лотлар - Батафсил -->
                        </div>
                        <router-link
                            class="btn btn-block g-brd-top-none g-brd-gray-light-v3 g-brd-primary--hover g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15"
                            :to="{ name:'lot.single',params:{id:land.id} }">
                            Батафсил
                            <i class="align-middle ml-2 fa fa-angle-right"></i>
                        </router-link>
                    </article>
                    <!-- End Lot -->
                </div>
            </div>
            <div v-if="lands.length > 9" class="text-center g-mb-20">
                <a class="btn g-color-text g-color-primary--hover g-bg-transparent g-font-weight-600 text-uppercase rounded-0"
                   href="page-listing-1.html">
                    <span class="align-middle g-color-primary g-font-size-20 g-pos-rel g-top-minus-2 mr-2">&#43;</span>
                    Барча лотларни кўриш
                </a>
            </div>
            <section class="g-bg-primary g-color-white g-pa-30">
                <div class="row">
                    <div class="col-md-9 align-self-center">
                        <h3 class="h4">Деҳқон ёки қишлоқ хўжалиги мақсадлари учун ер керакми?</h3>
                        <p class="lead g-color-white g-mb-20 g-mb-0--md">Ўзингизга керакли йўналишда ерларни танланг ва
                            танловда иштирок этиш учун ҳужжатларни жўнатинг</p>
                    </div>
                    <div class="col-md-3 align-self-center text-md-right">
                        <a class="btn btn-md u-btn-outline-white g-brd-2 rounded-0" href="#">Танловда иштирок этиш</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
import Countdown from '../Countdown.vue';

export default {
    components: {Countdown},
    props: {
        lands: {
            type: Array,
            required: true
        }
    },
    data() {
        return {}
    },
    methods: {},
    mounted() {
    }

}
</script>
