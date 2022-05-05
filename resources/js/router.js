import {VueRouter, createWebHistory, createRouter} from 'vue-router'

const routes = [
    {
        path: "/",
        component: () => import('./components/Modules/Index'),
        name:'index'
    },
    {
        path: "/about",
        component: () => import('./components/Modules/About'),
        name:'about'
    },
    {
        path: "/documents",
        component: () => import('./components/Modules/Docs'),
        name:'docs'
    },
    {
        path: "/manuals",
        component: () => import('./components/Modules/Manuals'),
        name:'manuals'
    },
    {
        path: "/faq",
        component: () => import('./components/Modules/FAQ'),
        name:'faq'
    }



]

const router = createRouter({
    history: createWebHistory(),
    mode: 'history',
    routes
})
export default router
