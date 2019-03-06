import Vue from 'vue';
import axios from 'axios';

window.Vue = Vue;
window.axios = axios;

Vue.component("medium-articles", require('./components/MediumArticles.vue'));

const app = new Vue({
    el: '#app'
});
