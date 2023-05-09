const { createApp } = Vue;

createApp({
   data() {
      return {
         api_index_url: "app/Http/Controllers/TasksController/index.php",
         api_store_url: "app/Http/Controllers/TasksController/store.php",
         api_update_url: "app/Http/Controllers/TasksController/updateTasks.php",
         api_delete_url: "app/Http/Controllers/TasksController/deleteTasks.php",
         tasks: [],
         new_task: '',
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
               this.tasks = response.data;
            })
            .catch((error) => {
               console.error(error.message);
            });
         this.new_task = "";
      },
      doneTask(i) {
         const data = {
            taskIndex: i,
         };

         axios
            .post(this.api_update_url, data, {
               headers: { "Content-Type": "multipart/form-data" },
            })
            .then((response) => {
               console.log(response);
               this.tasks = response.data;
            })
            .catch((error) => {
               console.error(error.message);
            });
      },
      deleteTask(i) {
         const data = {
            taskToDelete: i,
         };

         axios
            .post(this.api_delete_url, data, {
               headers: { "Content-Type": "multipart/form-data" },
            })
            .then((response) => {
               console.log(response);
               this.tasks = response.data;
            })
            .catch((error) => {
               console.error(error.message);
            });
      },
   },
   mounted() {
      axios
         .get(this.api_index_url)
         .then((response) => {
            console.log(response);
            this.tasks = response.data;
         })
         .catch((error) => {
            console.error(error.message);
         });
   },
}).mount("#app");