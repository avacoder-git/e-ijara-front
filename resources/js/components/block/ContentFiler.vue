<template>
    <div>
        <div class="g-bg-cover g-bg-pos-top-center g-bg-img-hero g-bg-cover g-bg-black-opacity-0_3--after g-py-100"
             style="background-image: url(/assets/img-temp/1920x1080/img1.jpg);">
            <div class="container g-pos-rel g-z-index-1">
                <div class="g-bg-white g-pa-30">
                    <!-- Input Group -->
                    <form @submit.prevent="Search">
                        <div class="row g-mx-0--md">
                            <!-- Button Group -->
                            <div class="col-md-6 col-lg-6 g-px-0--md g-mb-30">
                                <v-select @input="GetDistirct" :reduce="region => region.regionid"
                                          class="w-100 h-100 u-select-v1 g-min-width-150  g-brd-gray-light-v3 g-color-main g-color-primary--hover"
                                          placeholder="Республика бўйича"
                                          label="nameuz"
                                          v-model="fields.regionid" :options="regions"/>

                            </div>
                            <div class="col-md-6 col-lg-6 g-px-0--md g-mb-30">
                                <v-select
                                    :resetOnOptionsChange="true"
                                    placeholder="Туман(шаҳар)"
                                    class="w-100 h-100 u-select-v1 g-min-width-150  g-brd-gray-light-v3 g-color-main g-color-primary--hover"
                                    :reduce="district => district.areaid" label="nameuz"
                                    v-model="fields.districtid" :options="districts"/>
                            </div>
                            <!-- End Button Group -->
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-3 g-mb-30">
                                <!-- Button Group -->
                                <div class="input-group-btn">
                                    <v-select
                                        :resetOnOptionsChange="true"
                                        placeholder="Тури"
                                        class="u-select-v1 w-100 g-brd-gray-light-v3 g-color-main g-color-primary--hover g-py-12"
                                        :reduce="land_purpose => land_purpose.id" label="name"
                                        v-model="fields.type" :options="land_purposes"/>
                                </div>
                                <!-- End Button Group -->
                            </div>
                            <div class="col-6 col-lg-3 g-mb-30">
                                <!-- Button Group -->
                                <div class="input-group-btn">
                                    <v-select
                                        :resetOnOptionsChange="true"
                                        placeholder="Ихтисослик"
                                        class="u-select-v1 w-100 g-brd-gray-light-v3 g-color-main g-color-primary--hover g-py-12"
                                        :reduce="land_purpose_category => land_purpose_category.id" label="name"
                                        v-model="fields.specalization" :options="land_purpose_categories"/>
                                </div>
                                <!-- End Button Group -->
                            </div>
                            <div class="col-6 col-lg-3 g-mb-30">
                                <!-- Button Group -->
                                <div class="input-group-btn">

                                    <v-select
                                        :resetOnOptionsChange="true"
                                        placeholder="Шўрланиш даражаси"
                                        class="u-select-v1 w-100 g-brd-gray-light-v3 g-color-main g-color-primary--hover g-py-12"
                                        :reduce="salinit_level => salinit_level.id" label="name"
                                        v-model="fields.salinity_level" :options="salinity_levels"/>
                                </div>
                                <!-- End Button Group -->
                            </div>
                            <div class="col-6 col-lg-3 g-mb-30">
                                <!-- Button Group -->
                                <div class="input-group-btn">

                                    <v-select
                                        :resetOnOptionsChange="true"
                                        placeholder="Балл бонитети"
                                        class="u-select-v1 w-100 g-brd-gray-light-v3 g-color-main g-color-primary--hover g-py-12"
                                        :reduce="baniteli_ball => baniteli_ball.value" label="text"
                                        v-model="fields.baniteli_ball" :options="baniteli_balls"/>
                                </div>
                                <!-- End Button Group -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-4 g-mb-30">
                                <input :value="fields.min_area"
                                       class="form-control rounded-0 g-brd-gray-light-v3 g-px-20 g-py-15" type="number"
                                       placeholder="Мин.майдон (Га)">
                            </div>
                            <div class="col-6 col-lg-4 g-mb-30">
                                <input :value="fields.max_area"
                                       class="form-control rounded-0 g-brd-gray-light-v3 g-px-20 g-py-15" type="number"
                                       placeholder="Макс.майдон (Га)">
                            </div>
                            <div class="col-sm-6 col-lg-4 g-mb-30">
                                <h2 class="h6 g-font-weight-600 mb-4">Ижара муддати</h2>
                                <!--                                <h2 class="h6 g-font-weight-600 mb-4">Ижара муддати(<span-->
                                <!--                                    id="rangeSliderAmount3">25</span>)-->
                                <!--                                    йил</h2>-->
                                <!--                                <div id="rangeSlider1" class="u-slider-v1-3" data-result-container="rangeSliderAmount3"-->
                                <!--                                     data-range="true" data-default="10, 25" data-min="10" data-max="50"></div>-->
                                <vue-range-slider :bg-style="bgStyle" :tooltip-style="tooltipStyle"
                                                  :process-style="processStyle" ref="slider" enable-cross="enable-cross"
                                                  :min="10" :max="50"
                                                  :formatter="formatter"
                                                  :start-animation="true"
                                                  v-model="fields.lease_term"></vue-range-slider>

                            </div>
                        </div>
                        <div class="text-right">
                            <button
                                class="btn btn-block u-btn-primary g-color-white g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15"
                                type="submit">
                                Излаш
                            </button>
                        </div>
                    </form>
                    <!-- End Input Group -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import vSelect from 'vue-select'
import 'vue-select/dist/vue-select.css';
import 'vue-range-component/dist/vue-range-slider.css'
import VueRangeSlider from 'vue-range-component'

export default {
    name: 'component-filter',
    data() {
        return {
            enableCross: false,
            lots: [],
            fields: {
                regionid: null,
                districtid: null,
                type: null,
                specalization: null,
                salinity_level: null,
                baniteli_ball: null,
                min_area: null,
                max_area: null,
                lease_term: [10, 25]
            },
            regions: [{regionid: '', nameuz: ''}],
            districts: [{areaid: '', nameuz: ''}],
            fond_types: [{id: '', name: ''}],
            land_purposes: [{id: '', name: ''}],
            land_purpose_categories: [{id: '', name: ''}],
            salinity_levels: [{id: '', name: ''}],
            baniteli_balls: [
                {
                    value: 10,
                    text: 10
                },
                {
                    value: 20,
                    text: 20
                },
                {
                    value: 30,
                    text: 30
                },
                {
                    value: 40,
                    text: 40
                },
                {
                    value: 50,
                    text: 50
                },
                {
                    value: 60,
                    text: 60
                },
                {
                    value: 70,
                    text: 70
                },
                {
                    value: 80,
                    text: 80
                },
                {
                    value: 90,
                    text: 90
                },
                {
                    value: 100,
                    text: 100
                },
            ],
            bgStyle: {
                backgroundColor: '#fff',
                boxShadow: 'inset 0.5px 0.5px 3px 1px rgba(0,0,0,.36)'
            },
            tooltipStyle: {
                backgroundColor: '#4caf50',
                borderColor: '#4caf50'
            },
            processStyle: {
                backgroundColor: '#999'
            },
            formatter: {
                formatter: value => `йил ${value}`
            }
        }
    },
    methods: {
        Regions() {
            axios.get('/api/directory/regions')
                .then(response => {

                    this.regions = response.data.data;
                })
        },
        GetDistirct() {

            axios.get('/api/directory/districts?regionid=' + this.fields.regionid)
                .then(response => {
                    this.districts = response.data.data;
                })
        },
        GetLandPurposes() {

            axios.get('/api/directory/land_purposes')
                .then(response => {
                    this.land_purposes = response.data.data;
                })
        },
        GetLandPurposeCategories() {
            axios.get('/api/directory/land_purpose_categories')
                .then(response => {
                    this.land_purpose_categories = response.data.data;
                })
        },
        GetSalinityLevels() {
            axios.get('/api/directory/salinity_levels')
                .then(response => {
                    this.salinity_levels = response.data.data;
                })
        },

        Search() {
            axios.get('/api/lands', {params: this.fields})
                .then(response => {
                    this.lots = response.data.data;

                    this.$emit('send:data', this.lots)
                })
        },
    },
    created() {
        this.tooltipMerge = false
        this.formatter = value => ` ${value} йил`
    },
    async mounted() {
        this.Regions();
        this.GetLandPurposes();
        this.GetLandPurposeCategories();
        this.GetSalinityLevels();
    },
    components: {
        vSelect, VueRangeSlider
    },
}
</script>
