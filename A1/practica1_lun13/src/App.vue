<template>
  <!--<img alt="Vue logo" src="./assets/logo.png">-->
  <MiComponte/>
  <!--<HelloWorld msg="Estoy desde vue" msg2="Y esto es una propiedad"/>-->
</template>

<script>
//import HelloWorld from './components/HelloWorld.vue'
import MiComponte from './components/MiComponente.vue'

export default {
  name: 'App',
  components: {
    MiComponte
    //HelloWorld
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
