import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import { createApp } from 'vue';

import Header from './header.vue';
import App from './app.vue';

const header = createApp(Header)
const app = createApp(App);

header.mount('#header')
app.mount('#app');