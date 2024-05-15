<template>
    <div>
        <p>{{ mensaje }}</p>
        <!--<img src="@/assets/api.png">-->
        <img :src="imagen" alt="">
        <input type="text">
        <button>{{ boton }}</button>
        <ul>
            <li v-for="objeto in listado" v-bind:key="objeto.text"> {{ objeto.text }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'MiComponente',
    data() {
        return {
            mensaje: "lorem ipsum it dolor",
            boton:"click",
            imagen:require("@/assets/api.png"),
            listado:[
                {text:"Manzanas"},
                {text:"Peras"},
                {text:"Uvas"}
            ]
        }
    }
}
</script>

<style scoped>
div {
    color: red;
}
</style>
