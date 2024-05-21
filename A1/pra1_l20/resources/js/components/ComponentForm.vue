<template>
    <form @submit.prevent="alerta">
        <label>Nombre</label>
        <input v-model="nombre" type="text">
        <label>Apellido</label>
        <input v-model="apellido" type="text">
        <!--<input @click="alerta()" type="submit">-->
        <button type="submit">Haz Click</button>
    </form>
</template>

<script>
    export default {
        name: 'Form',
        data() {
            return {
                nombre: '',
                apellido: ''
            };
        },
        methods: {
            alerta() {
                alert(`Nombre completo: ${this.nombre} ${this.apellido}`);
            }
        }
    }
</script>

<style>
</style>
