const {createApp} = Vue

createApp({
    data(){
        return{
            apiUrl : 'server.php',
            arrayDischi : []
        }
    },
    methods : {
    },
}).mount('#app')