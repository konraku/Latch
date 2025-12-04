import './bootstrap';
import { createApp } from 'vue';

// メインコンポーネント
import App from './app.vue';

const app = createApp(App);
app.mount('#app');