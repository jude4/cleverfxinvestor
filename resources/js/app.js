// require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';
import Vuetify from 'vuetify'

import axios from 'axios'

import AOS from 'aos';
import 'aos/dist/aos.css';

window.onload = AOS.init();

window.axios = axios
    // import 'vuetify/dist/vuetify.min.css'
    // import 'chart.js/dist/Chart.js';
    // index.js or main.js
import 'vuetify/dist/vuetify.min.css' // Ensure you are using css-loader

Vue.use(Vuetify)

const vuetifyOptions = {}

Vue.component('axios', require('axios').default)
Vue.component('deposit', require('./components/Deposit.vue').default);
Vue.component('users-feedback', require('./components/UsersFeedback.vue').default);

Vue.component('sign-in', require('./components/Login.vue').default)
Vue.component('sign-up', require('./components/Register.vue').default)
Vue.component('email-bar', require('./components/Email.vue').default)
Vue.component('our-team', require('./components/OurTeam.vue').default)
Vue.component('app-bar', require('./components/App.vue').default)
const app = new Vue({

    vuetify: new Vuetify(vuetifyOptions),   
    el: '#app',
})