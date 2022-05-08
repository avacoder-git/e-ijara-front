import Vue from 'vue'
import Index from './components/Index'
import router from "./router";
import VueRouter from 'vue-router'
import $ from 'jquery'
import vSelect from 'vue-select'
import { LMap, LTileLayer, LMarker } from 'vue2-leaflet';
import 'leaflet/dist/leaflet.css';

require('./bootstrap');

Vue.use(VueRouter)

const app = new Vue({
    el: '#app',
    components: {
        'index': Index,
        $
    },
    router
});
Vue.component('v-select', vSelect)
Vue.component('l-map', LMap);
Vue.component('l-tile-layer', LTileLayer);
Vue.component('l-marker', LMarker);
