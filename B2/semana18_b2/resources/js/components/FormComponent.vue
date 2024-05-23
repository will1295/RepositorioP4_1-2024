<template>
    <input v-model="libro.titulo" placeholder="Titulo">
    <input v-model="libro.autor" placeholder="Autor">
    <input v-model="libro.editorial" placeholder="Editorial">
    <button @click="guardar()" type="button">Guardar datos</button>

</template>

<script>
export default{
    name:'form',
    data(){
        return{
            libro:{
                'titulo':'',
                'autor':'',
                'editorial':''
            }
        }
    },
    methods:{
        guardar(){
            axios.post('/',this.libro).then(
                response=>{
                    console.log(response);
                    window.location.reload();
                }
            ).catch(erro=>{
                console.log('Error al guardar');
            })
        }
    }
}

</script>

<style>

</style>