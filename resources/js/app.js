require('./bootstrap');
import { createApp } from 'vue'
import index from '../components/index.vue';
import join from '../components/join.vue';
import joinList from "../components/joinList.vue";

const app = createApp({});
app.component('index', index)
    .component('join', join)
    .component('joinList', joinList)
    .mount('#app');

require('./bootstrap');
