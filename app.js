const { createApp } = Vue

createApp({
   data() {
      return {
         api_url: './getTasks.php',
      }
   },
   methods: {
   },
   mounted() {

      axios
         .get(this.api_url)
         .then(response => {
            console.log(response);
         })
         .catch(error => {
            console.error(error.message);
         })
   }

}).mount('#app');