/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


import Vue from 'vue'

require('./bootstrap');

// window.Vue = require('vue').default;

window.Vue = require('vue');    

// router
import router from './routes.js';
window.router = router;

//bootsrap vue
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
// Install BootstrapVue
Vue.use(BootstrapVue)


//jquery
import $ from 'jquery'
window.$ = $

const app = new Vue({
    el: '#app',router
});
