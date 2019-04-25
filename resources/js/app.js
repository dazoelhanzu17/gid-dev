
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
import VueProgressBar from 'vue-progressbar';
window.axios = require('axios');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
// Vue.component(HasError.name, HasError)
// Vue.component(AlertError.name, AlertError)
Vue.use(VueRouter)


let routes = [
    {
         path: '/admin/developer', 
         component: require('./components/Developer.vue').default
    },

    {
        path: '/berita', 
        component: require('../../Modules/Blog/Resources/assets/js/components/Berita.vue').default
    },

    {
        path: '/berita/baca', 
        name: 'baca',
        props: true,
        component: require('../../Modules/Blog/Resources/assets/js/components/Baca.vue').default
    },
    
    
  ]

const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
})


Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '5px'
});

window.Fire = new Vue;
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('pagination', require('laravel-vue-pagination'));

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default
);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});

