<template>
    <div>
        <h1 class="movieTitle"> {{movieTitle}} </h1>
        <input v-model="movieTitle" placeholder="edit me">
        <button v-on:click="helloWorld">Hello World</button>
    </div>
</template> 

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                movieTitle: "The Gentleman",
        };
        },
        methods: {
            helloWorld(){
                console.log('hello world')
        },
        },

    }
</script>

<style>
.movieTitle {
    font-family: 'Bubblegum Sans', sans-serif;
}
</style>