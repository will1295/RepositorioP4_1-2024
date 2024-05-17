<template>
    <p :id="idparrafo">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
         Nunc leo nunc, cursus eu scelerisque et, congue a
          justo. Nulla et tristique lorem. Fusce sit 
          amet nibh vitae risus imperdiet venenatis non sed 
          nisl.
    </p>

    <div>
        <ul>
            <li v-for="producto,index in productos" :key="index">{{producto }}</li>
        </ul>

    </div>

    <button @click="alerta">{{ txtbutton }}</button>

    <input type="text" v-model="inputText">
    <p>{{ inputText }}</p>
    <p v-html="textoHtml"></p>

</template>

<script>

export default{
    name:'BindComponent',
    data(){
        return{
            inputText:'',
            idparrafo:'parrafo',
            txtbutton:'Haz Click Aqui',
            productos:[
                'Papas',
                'Cebollas',
                'Tomates'
            ],
            textoHtml:'<span style="color:red">Parrafo en rojo</span>'
            
        }
    },
    methods:{
        alerta(){
            alert('Hola Vue!')
        }
    }
}

</script>

<style scoped>

    #parrafo{
        color: red;
    }

</style>