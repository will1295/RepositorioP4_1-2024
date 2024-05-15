<template>
    <div>
        <p>{{mensaje }}</p>
        <input>
        <button>{{ btn }}</button>
    </div>
</template>

<script>
    export default{
        name:'MiComponente',
        data(){
            return{
                mensaje:"Lorem, ipsum dolor sit amet consectetur"+
                        +"adipisicing elit. Sunt, enim ratione quaerat"+ 
                        "tempora exercitationem obcaecati placeat ipsum"+
                        +"optio inventore velit nemo praesentium fuga"+
                        "vitae voluptates nulla vero est, natus ipsam.",
                btn:"Click"

            }
        }
        
    }

</script>

<style scoped>

    div{
        color: red;
    }

</style>