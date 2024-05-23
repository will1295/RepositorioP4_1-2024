import './bootstrap';
import { createApp } from 'vue';
import ListaPersonas from './components/ListaPersonas.vue';
import Guardar from './components/FormInsert.vue'
import axios from 'axios';


const app = createApp({});
app.component('listado-personas',ListaPersonas);
app.component('form-insert',Guardar);
app.mount('#app');
window.axios = axios;