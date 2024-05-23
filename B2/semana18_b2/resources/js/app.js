import './bootstrap';
import { createApp } from 'vue';
import axios from 'axios';
import listado from './components/ListaComponent.vue';
import form from './components/FormComponent.vue';

window.axios = axios;

const app = createApp({});
app.component('lista-libros',listado);
app.component('form-libro',form);
app.mount('#app');
