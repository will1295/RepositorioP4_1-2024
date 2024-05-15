<template>

  <UsoBind></UsoBind>
  <EjemploBind></EjemploBind>

</template>

<script>
import UsoBind from './components/UsoBind.vue'
import EjemploBind from './components/EjemploBind.vue'
export default {
  name: 'App',
  components: {
    UsoBind,
    EjemploBind
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
