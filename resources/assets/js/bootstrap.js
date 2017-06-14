// window._ = require('lodash');
// try {
//     window.$ = window.jQuery = require('jquery');

//     require('bootstrap-sass');
// } catch (e) {}
import Vue from 'vue'
window.Vue = Vue;
import VueRouter from 'vue-router';

Vue.use(VueRouter);
import axios from 'axios';
window.axios = axios;


import VueAwesomeSwiper from 'vue-awesome-swiper'
Vue.use(VueAwesomeSwiper)

// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

