const { createApp } = Vue;

createApp({
    data() {
        return {
            disks:[],
            discIndex: [],
            showDetails: false,
                
        }
    },

    methods: {
        discInfo(infoIndex){
            axios.get('./server.php').then(res => {
                this.discIndex = res.data[infoIndex];
            });
            this.showDetails = true;
        }
    },

    mounted() {

        axios.get('./server.php').then(res => {
            this.disks = res.data;
        });
    },

}).mount('#app');