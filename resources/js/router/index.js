import Vue from 'vue'
import VueRouter from 'vue-router'
import Inicio from '../pages/Inicio.vue'
import Projects from '../pages/Projects.vue'
import About from '../pages/About.vue'
import Contact from '../pages/Contact.vue'
const routes = [
    {
        path:'/',
        name:'inicio',
        component:Inicio
    },
    {
        path:'/projects',
        name:'projects',
        component:Projects
    },
    {
        path:'/about',
        name:'about',
        component:About
    },
    {
        path:'/contact-me',
        name:'contactme',
        component:Contact
    }
]


const router = new VueRouter({routes})
Vue.use(VueRouter)

export default router
