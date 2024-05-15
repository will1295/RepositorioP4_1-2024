<template>
  <!--<button type="button" id="btnestilo">Haz Click</button>-->
  <!--<button type="submit" v-on:click="alerta"
  v-bind:id="estilo">{{ textobtn }}</button>-->
  <button type="submit" @click="alerta"
  v-bind:id="estilo">{{ textobtn }}</button>
  <p :class="clase">Ejemplo usando v-bind</p>
  <input type="text" v-model="inputText">
  <p>{{ inputText }}</p>

  <ul>
    <li v-for="producto in productos"
     :key="producto.nombre">{{ producto.nombre }}</li>
  </ul>


   </template>

<script>
    export default{
            name:'UsoBind',
            data(){
                return {
                    estilo:'btnestilo',
                    textobtn:'Haz Click',
                    clase:'parrafo',
                    productos:[
                        {nombre:'Mouse'},
                        {nombre:'Laptop'},
                        {nombre:'Monitor'}
                    ],
                    inputText:''
                }
               
            },
            methods:{
                alerta(){
                    alert('Haz hecho click');
                }
            }
    }
</script>

<style>

#btnestilo{
    color: brown;
    background-color: aqua;
}

.parrafo{
    font-size: 20px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}

</style>