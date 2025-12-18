import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import { createApp } from 'vue';

import Header from '/resources/vue/header.vue';
import Main from '/resources/vue/main.vue';
import Footer from '/resources/vue/footer.vue'

const header = createApp(Header)
const main = createApp(Main);
const footer = createApp(Footer)

header.mount('#header')
main.mount('#main');
footer.mount('#footer');