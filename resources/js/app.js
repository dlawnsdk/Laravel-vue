import components from "../components/index.vue";

require('./bootstrap');
import { createApp } from 'vue'
import index from '../components/index.vue';
import join from '../components/join.vue';

const app = createApp({});
app.component('index', index)
    .component('join', join)
    .mount('#app');

require('./bootstrap');
