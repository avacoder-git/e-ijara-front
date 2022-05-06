<template>
    <div>
        <div class="bg-white">
            <div class="container-fluid section-2">
                <h1>Ochiq xarita</h1>

                <div class="tab-menu">
                    <button class="tab-btn active">Umumiy xarita</button>
                    <button class="tab-btn">Yer uchastkalari</button>
                </div>

                <div class="d-flex">
                    <v-select :options="['Canada', 'United States']"></v-select>

                </div>


            </div>
        </div>

        <div class="container-fluid mt-4 section-2">
            <div id="mapContainer"></div>
        </div>

    </div>
</template>

<script>
import "leaflet/dist/leaflet.css";
import L from "leaflet";
import "@tweenjs/tween.js";
import "@elfalem/leaflet-curve";
import "vue-select-3/dist/vue-select.css";



export default {
    name: "Map",
    data() {
        return {
            map: null,
        };
    },

    mounted() {
        this.map = L.map("mapContainer").setView( [39.449269626, 67.237035371], 7);
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution:
                '<a target="_blank" href="http://www.agro.uz"> www.agro.uz &copy; AgroDigital</a>',
        }).addTo(this.map);
        //use a mix of renderers
    }


}
</script>

<style scoped>



</style>
