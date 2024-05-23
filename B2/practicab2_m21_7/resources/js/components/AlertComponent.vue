<template>
    <label>Nombre</label>
    <input v-model="nombre">
    <label>Apellido</label>
    <input v-model="apellido">
    <button @click="mostrarAlert()" type="button">Haz Click aqui</button>
</template>

<script>
    export default{
        name:'Alert',
        methods:{
            mostrarAlert(){
                alert(`Tu nombre completo es: ${this.nombre} ${this.apellido}`);
            }
        },
        data(){
            return{
                nombre:'',
                apellido:''
            }
        }
    }

</script>

<style>

</style>