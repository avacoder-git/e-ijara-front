<template>
    <div class="container-fluid section-2" id="statistics">
        <div class="row">
            <div class="col-lg-12">
                <h1>Statistika</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-12">
                <div class="owl-carousel" id="statistics-owl">
                    <div class="rectangle">
                        <div class="block">
                            <div class="block-title">Yangi yer maydonlari</div>
                            <div class="block-numbers">
                                <div class="son">{{ counts.new_lands.count }}</div>
                                <div class="splitter"></div>
                                <div class="ga">{{ counts.new_lands.area }} Ga</div>
                            </div>
                        </div>
                        <div class="block">
                            <img src="image/stat1.svg" alt="">
                        </div>
                    </div>
                    <div class="rectangle">
                        <div class="block">
                            <div class="block-title">Ajratilgan yer maydonlari</div>
                            <div class="block-numbers">
                                <div class="son">{{ counts.ajratilgan_lands.count }}</div>
                                <div class="splitter"></div>
                                <div class="ga">{{ counts.ajratilgan_lands.area }} Ga</div>
                            </div>
                        </div>
                        <div class="block">
                            <img src="image/ajratilgan.png" alt="">
                        </div>
                    </div>
                    <div class="rectangle">
                        <div class="block">
                            <div class="block-title">Tanlovdagi yer maydonlari</div>
                            <div class="block-numbers">
                                <div class="son">{{ counts.tanlovdagi_lands.count  }}</div>
                                <div class="splitter"></div>
                                <div class="ga">{{ counts.tanlovdagi_lands.area }} Ga</div>
                            </div>
                        </div>
                        <div class="block">
                            <img src="image/tanlovdagi.png" alt="">
                        </div>
                    </div>
                    <div class="rectangle">
                        <div class="block">
                            <div class="block-title">Loyihalashdagi yer maydonlari</div>
                            <div class="block-numbers">
                                <div class="son">{{ counts.loyihalashdagi_lands.count }}</div>
                                <div class="splitter"></div>
                                <div class="ga">{{ counts.loyihalashdagi_lands.area }} Ga</div>
                            </div>
                        </div>
                        <div class="block">
                            <img src="image/loyiha.png" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "Statistics",

    data() {
        return {
            counts: {
                new_lands: {count: null,area: null},
                ajratilgan_lands: {count: null,area: null},
                tanlovdagi_lands: {count: null,area: null},
                loyihalashdagi_lands:  {count: null,area: null},
            }
        }
    },

    methods: {
        getData() {
            axios.get('api/geojson/GetAllCountByStatus')
                .then(response => {
                    this.counts = response.data
                })
                .catch(error => {
                    console.log(error);
                })
        }
    },

    mounted() {
        this.getData()
    }


}
</script>

<style scoped>

</style>
