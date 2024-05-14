<template>
    <div>
        <p>
            {{parrafo}}
        </p>
    </div>
</template>

<script>
    export default{
        name:'MiComponente',
        data(){
            return {
            parrafo:"lorem ipsum it dolor"
        }
        }
    }
</script>

<style scoped>
    div{
        color: red;
    }
</style>