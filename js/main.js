const { createApp } = Vue;

createApp({
    data() {
        return {
            disks:[],
                
        }
    },

    mounted() {
        
        axios.get('./server.php').then(res => {
            this.disks = res.data;
        });
    },

}).mount('#app');