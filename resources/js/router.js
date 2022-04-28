import {VueRouter, createWebHistory, createRouter} from 'vue-router'

const routes = [
    {
        path: "/",
        component: () => import('./components/Modules/Index'),
        name:'index'
    }

]

const router = createRouter({
    history: createWebHistory(),
    mode: 'history',
    routes
})
export default router
