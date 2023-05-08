const { createApp } = Vue;

createApp({
   data() {
      return {
         api_url: "./getTasks.php",
         api_store_url: "./storeTasks.php",
         tasks: [],
         new_task: "",
      };
   },
   methods: {
      addTask() {
         this.tasks.unshift(this.new_task);

         const data = {
            new_task: this.new_task,
         };

         axios
            .post(this.api_store_url, data, {
               headers: { "Content-Type": "multipart/form-data" },
            })
            .then((response) => {
               console.log(response);
            })
            .catch((error) => {
               console.error(error.message);
            });
         this.new_task = "";
      },
   },
   mounted() {
      axios
         .get(this.api_url)
         .then((response) => {
            console.log(response);
            this.tasks = response.data;
         })
         .catch((error) => {
            console.error(error.message);
         });
   },
}).mount("#app");