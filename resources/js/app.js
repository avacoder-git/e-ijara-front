import {createApp} from 'vue'
import Index from './components/Index'
import router from './router'
import { library } from '@fortawesome/fontawesome-svg-core'

/* import specific icons */
import { faUserSecret } from '@fortawesome/free-solid-svg-icons'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'


library.add(faUserSecret)


require('./bootstrap');

const app = createApp(Index)
app.use(router)
app.component('font-awesome-icon', FontAwesomeIcon)
app.mount('#app')
