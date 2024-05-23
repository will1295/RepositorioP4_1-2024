<template>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Editorial</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="libro in libros" :key="libro.id">
                <td>{{ libro.titulo }}</td>
                <td>{{ libro.autor }}</td>
                <td>{{ libro.editorial }}</td>
            </tr>
            
        </tbody>
    </table>

</template>

<script>

export default {
    name: 'listado',
    data(){
        return{
            libros:[]
        }
       
    },
    mounted(){
        axios.get('/listalibros').then(
            response =>{
                console.log(response);
                this.libros = response.data
            }
        ).catch(error=>{
            console.log('Eror al mostrar los datos')
        })

    }
}

</script>

<style>

</style>