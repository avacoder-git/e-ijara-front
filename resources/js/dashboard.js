require('./bootstrap');
import Vue from 'vue'
import Index from './components/Dashboard/Modules/Index'
import router from './routes/dashboard'




const app = new Vue({
    el: '#dashboard',
    
    router,
    components: { Index },
});




