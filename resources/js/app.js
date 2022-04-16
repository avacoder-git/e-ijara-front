require('./bootstrap');
import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import { LControl, LGeoJson, LMap, LMarker, LPolygon, LPopup, LTileLayer } from 'vue2-leaflet';
import 'bootstrap-vue/dist/bootstrap-vue.css'
import 'leaflet/dist/leaflet.css';
import VueRouter from 'vue-router'
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import VueTheMask from 'vue-the-mask';
import routes from './routes'
import App from './components/Page/App'


Vue.use(VueRouter)
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
Vue.use(VueSweetalert2);

Vue.use(VueTheMask);
Vue.component('l-map', LMap);
Vue.component('l-tile-layer', LTileLayer);
Vue.component('l-marker', LMarker);
Vue.component('l-polygon', LPolygon);
Vue.component('l-geo-json', LGeoJson);
Vue.component('l-control', LControl);
Vue.component('l-popup', LPopup);


Vue.component('pagination', require('laravel-vue-pagination'));




const app = new Vue({
    el: '#app',
    data() {
        return {}
    },
    methods: {
        currentUser() {
            axios.get('/api/me')
                .then(response => {
                    this.user = response.data;
                })
                .catch(error => {
                    console.log(error);
                })
        }
    },
    components: { App },
    router: new VueRouter(routes)
});



