<template>
    <div>
        <Landing/>
        <Content />
        <div class="container minh">

            <div>

                <b-card no-body>
                    <b-tabs card>
                        <b-tab title="харита" active>
                            <div class="row" style="margin-bottom: 10px">
                                <div class="col-md-4">
                                    <div v-if="pointedLocation">
                                        <h1 class="h1" v-text="pointedLocation.region"></h1>
                                        <h3 class="h3"> {{ pointedLocation.count }}</h3>
                                        <p class="h3"> {{ pointedLocation.allarea }}</p>
                                    </div>
                                </div>
                                <section class="col-md-8">
                                    <radio-svg-map v-model="selectedLocation" @mouseover="pointLocation"
                                                   @mouseout="unpointLocation"
                                                   :map="uzbekistan"/>
                                </section>
                            </div>
                        </b-tab>
                        <b-tab title="Жадвал">
                            <div>
                                <b-table striped :items="allregion" :fields="fields" ></b-table>
                            </div>
                        </b-tab>
                        <template #tabs-end>
                            <p role="presentation" ><a class="nav-item align-self-center" style="float: right"><b>{{ moment()}}ҳолатига</b></a ></p>
                        </template>
                        <hr>
                    </b-tabs>
                </b-card>
            </div>


        </div>
    </div>
</template>

<script>
import Landing from "../Blocks/Landing";
import Content from "../Blocks/Content";
import {RadioSvgMap, SvgMap} from "vue-svg-map";
import uzbekistan from "@svg-maps/uzbekistan";
import moment from "moment";

export default {
    name: "Index",
    components: {Content, Landing, SvgMap, RadioSvgMap},
    data() {
        return {
            lands: [],
            links: {},
            selectedLocation: null,
            pointedLocation: {
                region: null,
                count: null,
                allarea: null
            },
            uzbekistan,
            allregion: [],
            fields: [
                {
                    key: 'nameuz',
                    label: 'Ҳудуд',
                    sortable: true,
                    // Variant applies to the whole column, including the header and footer
                    variant: 'danger'
                },
                {
                    key: 'lands_count_count',
                    label: 'Сони',
                    sortable: true,
                    // Variant applies to the whole column, including the header and footer
                    variant: 'danger'
                },
                {
                    key: 'lands_count_sum_area',
                    label: 'Майдони',
                    sortable: true,
                    // Variant applies to the whole column, including the header and footer
                    variant: 'danger'
                }
            ],
        }
    },
    methods: {

        pointLocation(event) {
            this.pointedLocation = this.getRegionCounts(this.getLocationName(event.target));
            this.selectedLocation = this.getLocationName(event.target).toLowerCase();
        },
        getRegionCounts(region) {
            if (region != 'Aral Sea') {
                axios.get('/api/geojson/getCount', {
                    params: {
                        region_id: this.TextToSoto(region)
                    }
                })
                    .then(response => {
                        this.pointedLocation = response.data;
                    })
                    .catch(error => {
                        console.log(error);
                    })
            }
        },
        getAllCounts() {
            axios.get('/api/geojson/GetAllCount')
                .then(response => {
                    this.allregion = response.data;
                })
                .catch(error => {
                    console.log(error);
                })
        },
        unpointLocation(event) {
            // this.pointedLocation = null
            // this.selectedLocation = null;
        },
        getLocationName(node) {
            return node && node.attributes.name.value
        },
        TextToSoto(region) {
            switch (region) {
                case 'Andijan':
                    return 1703;
                case 'Bukhara':
                    return 1706;
                case 'Fergana':
                    return 1730;
                case 'Xorazm':
                    return 1733;
                case 'Jizzakh':
                    return 1708;
                case 'Karakalpakstan':
                    return 1735;
                case 'Navoiy':
                    return 1712;
                case 'Qashqadaryo':
                    return 1710;
                case 'Samarqand':
                    return 1718;
                case 'Sirdaryo':
                    return 1724;
                case 'Surxondaryo':
                    return 1722;
                case 'Namangan':
                    return 1714;
                case 'Tashkent':
                    return 1727;
                case 'Tashkent_city':
                    return 1726;
            }

        },
        moment: function () {
            return moment().locale('uz').format('LLL');
        }

    },
    async mounted() {
        this.getAllCounts();

    }
}
</script>

<style scoped>

</style>
