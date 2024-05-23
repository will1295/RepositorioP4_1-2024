import './bootstrap';
import { createApp } from 'vue';
import Hello from './components/HelloComponent.vue';
import Alert from './components/AlertComponent.vue';

const app = createApp({});
app.component("hello-component",Hello);
app.component("alert-component",Alert);
app.mount("#app");

