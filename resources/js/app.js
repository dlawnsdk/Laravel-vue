require('./bootstrap');
import { createApp } from 'vue'
import index from '../components/index.vue';
import home from '../components/home/home.vue';

const app = createApp({});
app.component('index', index)
    .component('home', home)
    .mount('#app');

require('./bootstrap');
