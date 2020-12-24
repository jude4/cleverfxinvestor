window.Vue = require('vue');
import Vue from 'vue';
import Vuetify from 'vuetify'

import axios from 'axios'



window.axios = axios
import AOS from 'aos';
import 'aos/dist/aos.css';

window.onload = AOS.init();
    // import 'vuetify/dist/vuetify.min.css'
    // import 'chart.js/dist/Chart.js';
    // index.js or main.js
import 'vuetify/dist/vuetify.min.css' // Ensure you are using css-loader

Vue.use(Vuetify)

const vuetifyOptions = {}

Vue.component('axios', require('axios').default)
Vue.component('deposit', require('./components/Deposit.vue').default);
Vue.component('Countdown', require('./components/Countdown.vue').default)
