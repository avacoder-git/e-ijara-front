// import Single from "../components/pages/Single";
// import Lots from "../components/pages/Lots";
// import Docs from '../components/pages/Docs.vue'
// import About from '../components/pages/About.vue'
// import Manual from '../components/pages/Manul.vue'
// import CompetitionRules from '../components/pages/CompetitionRules.vue'
// import Policy from '../components/pages/Policy.vue'
// import Faq from '../components/pages/Faq.vue'
// import Help from '../components/pages/Help.vue'
// import Contact from  '../components/pages/Contact.vue'


import Index from '../components/Page/Index'
import NotFound from '../components/pages/NotFound.vue'
import Contact from  '../components/Page/Contacts'
import Docs from  '../components/Page/Docs'
import Faqs from  '../components/Page/Faq'
import Instructions from "../components/Page/Instructions";
import Map from "../components/Page/Map";
import About from "../components/Page/About";
import Single from "../components/Page/Single";
import MapSingle from "../components/Page/MapSingle";

export default {
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Index,
            name: 'index'
        },
        {
            path: '/page/contact',
            component: Contact,
            name: 'contact'
        },
        {
            path: '/page/docs',
            component: Docs,
            name: 'docs'
        },
        {
            path: '/page/faq',
            component: Faqs,
            name: 'faq'
        },
        {
            path: '/page/instructions',
            component: Instructions,
            name: 'instructions'
        },
        {
            path: '/map/:id?',
            component: Map,
            name: 'map'
        },
        {
            path: '/lot/view/:id?',
            component: MapSingle,
            name: 'map_single'
        },
        {
            path: '/page/about',
            component: About,
            name: 'about'
        },
        {
            path: '/lot/:id',
            component: Single,
            name: 'lot.single'
        },
        {
            path: "*",
            component: NotFound,
            name:'notfound'
        },
        {
            path: '/user',
            component: () => import('./../components/Dashboard/Modules/Index'),
            name: 'user'
        },
        {
            path: '/user/region',
            component: () => import('./../components/Dashboard/Modules/Region'),
            name: 'user.region'
        },
        // {
        //     path: '/lot/:id',
        //     component: Single,
        //     name: 'lot.single'
        // },
        // {
        //     path: '/lots',
        //     component: Lots,
        //     name: 'lot.lots'
        // },
        // {
        //     path: '/pages/docs',
        //     component: Docs,
        //     name: 'pages.docs'
        // },
        // {
        //     path: '/pages/about',
        //     component: About,
        //     name: 'pages.about'
        // },
        // {
        //     path: '/pages/manual',
        //     component: Manual,
        //     name: 'pages.manual'
        // },
        // {
        //     path: '/pages/competition-rules',
        //     component: CompetitionRules,
        //     name: 'pages.competition-rules'
        // },
        // {
        //     path: '/pages/policy',
        //     component: Policy,
        //     name: 'pages.policy'
        // },
        // {
        //     path: '/pages/faq',
        //     component: Faq,
        //     name: 'pages.faq'
        // },
        // {
        //     path: '/pages/help',
        //     component: Help,
        //     name: 'pages.help'
        // },
        // {
        //     path: '/pages/contact',
        //     component: Contact,
        //     name: 'pages.contact'
        // },

    ]
}
