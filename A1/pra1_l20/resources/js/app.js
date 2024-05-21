import './bootstrap';
import { createApp } from 'vue';
import App from "./components/App.vue";
import Form from "./components/ComponentForm.vue"

const app = createApp({});
app.component("ejemplo-component",App);
app.component("form-ingreso",Form);
app.mount("#app");
