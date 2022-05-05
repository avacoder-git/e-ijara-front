<template>
    <div class="tab-pane fade" id="map-table" role="tabpanel"
         aria-labelledby="map-table-tab">
        <table class="table">
            <thead>
            <tr>
                <th>Hudud</th>
                <th>Yangi yerlar soni</th>
                <th>Yangi yer maydonlari (ga)</th>
                <th>Tanlovdagi yerlar soni</th>
                <th>Tanlovdagi yerlar maydoni (ga)</th>
            </tr>
            </thead>
            <tbody>
            <tr v-if="regions" v-for="region in regions">
                <td>{{ region.nameuz }}</td>
                <td>{{ region.new_lands_count }}</td>
                <td>{{ region.new_lands_sum_area }}</td>
                <td>{{ region.lands_auction_count }}</td>
                <td>{{ region.lands_auction_sum_area }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "FieldStatusTable",

    data()
    {
        return {
            regions: null
        }
    },


    methods:{
        getAllCount()
        {
            axios.get('/api/geojson/GetAllCount')
            .then(result => {
                this.regions = result.data
            })
                .catch(error => {
                    console.log(error);
                })
        }
    },

    mounted() {
        this.getAllCount()
    }

}
</script>

<style scoped>

</style>
