const {createApp} = Vue

createApp({
    data(){
        return{
            apiUrl : 'server.php',
            arrayDischi : []
        }
    },
    mounted(){
        this.getDisks()
    },
    methods : {
        getDisks(){
            axios.get(this.apiUrl)
            .then((response) => {
                this.arrayDischi = response.data;
                console.log(this.arrayDischi);
            })
            .catch((error) => {
                console.error('errore chiamata API:', error);
            });
        }
    },
}).mount('#app')