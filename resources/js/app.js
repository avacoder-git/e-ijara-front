import {createApp} from 'vue'
import Index from './components/Index'
import router from './router'

require('./bootstrap');

const app = createApp(Index)
app.use(router)
app.mount('#app')
