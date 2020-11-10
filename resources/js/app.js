/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueResizeText from 'vue-resize-text';
import VueRouter from 'vue-router'

Vue.use(VueRouter)
Vue.use(VueResizeText)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('navbar-component', require('./components/NavbarComponent.vue').default);
Vue.component('product-component', require('./components/ProductComponent.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);

import home from './components/Home.vue';
import about from './components/About.vue';
import categorie from './components/Categorie.vue';
import contact from './components/Contact.vue';
import product from './components/Product.vue';


const routes = [
    {
        path: '/',
        component: home
    },
    {
        path: '/about',
        component: about
    },
    {
        path: '/categorie',
        component: categorie
    },
    {
        path: '/contact',
        component: contact
    },
    {
        path: '/product/:id',
        component: product
    }
    ,  {
        path: '/product/:id',
        component: contact
    }
];

const router = new VueRouter({routes});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router: router
});
