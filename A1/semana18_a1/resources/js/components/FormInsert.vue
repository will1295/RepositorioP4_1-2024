<template>
        <input v-model="persona.nombre" type="text" placeholder="Nombre">
        <input v-model="persona.apellido" type="text" placeholder="Apellido">
        <input v-model="persona.edad" type="number" placeholder="Edad">
        <input v-model="persona.dui" type="text" placeholder="DUI">
        <button @click="guardarInfo()" type="button">Guardar Datos</button>
</template>

<script>
    export default{
        name:'Guardar',
        data(){
            return{
                persona:{
                    'nombre':'',
                    'apellido':'',
                    'edad':'',
                    'dui':''
                }
            }
        },
        methods:{
            guardarInfo(){
                axios.post('/',this.persona).then(
                    response =>{
                        console.log(response);
                        windows.location.reload();
                    }
                ).catch(error=>{
                    console.log('Error al guardar los datos');
                })
            }
        }
    }

</script>

<style>

</style>