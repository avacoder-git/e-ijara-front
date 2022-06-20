import Vue from 'vue'
import Index from './components/Index'
import router from "./router";
import VueRouter from 'vue-router'
import $ from 'jquery'
import vSelect from 'vue-select'
import { LMap, LTileLayer, LMarker } from 'vue2-leaflet';
import 'leaflet/dist/leaflet.css';
import i18n from './i18n'
import Auth from './Auth.js';
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

require('./bootstrap');

Vue.use(VueRouter)
Vue.use(VueSweetalert2)

Vue.prototype.auth = Auth;

const app = new Vue({
    el: '#app',
    components: {
        'index': Index,
        $
    },
    i18n,

    router
});
Vue.component('v-select', vSelect)
Vue.component('l-map', LMap);
Vue.component('l-tile-layer', LTileLayer);
Vue.component('l-marker', LMarker);
