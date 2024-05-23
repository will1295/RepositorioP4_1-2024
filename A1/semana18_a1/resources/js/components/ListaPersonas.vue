<template>
    <div>
        <h1>Lista de personas</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>DUI</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="persona in personas" :key="persona.id">
                    <td>{{ persona.nombre }}</td>
                    <td>{{ persona.apellido }}</td>
                    <td>{{ persona.edad }}</td>
                    <td>{{ persona.dui }}</td>
                    <td><button @click="borrar( persona.id )">Eliminar</button></td>

                </tr>
            </tbody>
        </table>
    </div>

</template>

<script>
    export default{
        name:'ListaPersonas',
        data(){
            return{
                personas:[]
            }
        },
        mounted(){
            axios.get('/listado').then(
                response =>{
                    console.log(response);
                    this.personas = response.data;
                }
            )
                
            },
        methods:{
            borrar(personaId){
                axios.delete(`/borar/`${personaId})
            }
        }

    }

</script>

<style>

</style>