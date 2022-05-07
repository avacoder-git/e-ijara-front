import Vue from 'vue'
import Index from './components/Index'
import router from "./router";
import VueRouter from 'vue-router'
import $ from 'jquery'

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
