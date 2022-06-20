import VueRouter from 'vue-router'
import i18n from "./i18n";
import Auth from "./Auth"

const routes = [
    {

        path: "/",
        redirect: `/${i18n.locale}`
    },
    {
        path: "/:lang",
        component: {
            render (c) { return c('router-view')}
        },
        children :
            [
                {
                    path: "/",
                    component: () => import('./components/Modules/Index'),
                    name:'index'
                },
                {
                    path: "about",
                    component: () => import('./components/Modules/About'),
                    name:'about'
                },
                {
                    path: "documents",
                    component: () => import('./components/Modules/Docs'),
                    name:'docs'
                },
                {
                    path: "manuals",
                    component: () => import('./components/Modules/Manuals'),
                    name:'manuals'
                },
                {
                    path: "faq",
                    component: () => import('./components/Modules/FAQ'),
                    name:'faq'
                },
                {
                    path: "contact",
                    component: () => import('./components/Modules/Contact'),
                    name:'contact'
                },
                {
                    path: "map",
                    component: () => import('./components/Modules/Map'),
                    name:'map'
                }    ,
                {
                    path: "all",
                    component: () => import('./components/Modules/AllLands'),
                    name:'all'
                },
                {
                    path: "redirect",
                    component: () => import('./components/Auth/Redirect'),
                    name:'redirect'
                },
                {
                    path: "dashboard",
                    component: {
                        render (c) { return c('router-view')}
                    },
                    meta: {
                        requiresAuth: true
                    },

                    children: [
                        {
                            path: "applications",
                            component: () => import('./components/Auth/Dashboard'),
                            name:'dashboard.application'
                        },
                        {
                            path: "applications/create",
                            component: () => import('./components/Auth/Create'),
                            name:'dashboard.application.create'
                        },
                        {
                            path: "applications/saved",
                            component: () => import('./components/Auth/Saved'),
                            name:'dashboard.application.saved'
                        },
                        {
                            path: "applications/map",
                            component: () => import('./components/Auth/Map'),
                            name:'dashboard.application.map'
                        },
                        {
                            path: "info",
                            component: () => import('./components/Auth/Info'),
                            name:'dashboard.info'
                        }
                    ]
                }

            ]

    }
]



const router = new VueRouter({
    mode: 'history',
    routes,
    baseURL: "www.uz", // api的base_url
    scrollBehavior() {
        return { x: 0, y: 0 };
    },
    linkActiveClass: "active",
})

router.beforeEach((to, from, next) => {

    // use the language from the routing param or default language
    let language = to.params.lang;
    if (!language) {
        language = 'en'
    }

    // set the current language for i18n.
    i18n.locale = language
    if (to.matched.some(record => record.meta.requiresAuth) ) {
        if (Auth.check()) {
            next();
            return;
        } else {
            router.push('/uz');
        }
    } else {
        next();
    }
})


export default router
