<template>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>DUI</th>
        </thead>
        <tbody>
            <tr v-for="personas in persona" :key="persona.id">
                <td>{{ persona.Nombre }}</td>
                <td>{{ persona.Apellido }}</td>
                <td>{{ persona.Edad }}</td>
                <td>{{ persona.Dui }}</td>
            </tr>
        </tbody>
    </table>

</template>

<script>
import axios from 'axios';
export defaul{
    name:'Listado',
    data(){
        return{
            personas:[]
        }
    },
    mounted(){
        axios.get('/lista').then(
            response=>{
                console.log(response);
                this.personas = response.data;
            }
        ).catch(error =>{
            console.log('Error');
        })
    }
}

</script>

<style>

</style>