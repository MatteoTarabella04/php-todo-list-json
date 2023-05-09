<!doctype html>
<html lang='en'>

<head>
   <meta charset='utf-8'>
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <!-- bs5 -->
   <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet'
      integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
   <!-- font awesome -->
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
      integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=='
      crossorigin='anonymous' referrerpolicy='no-referrer' />
   <!-- mystyle -->
   <link rel="stylesheet" href="style.css">
   <title>ToDo List</title>
</head>

<body>
   <div id='app'>


      <div class="container">
         <h1 class="text-white text-muted text-center">ToDo List</h1>

         <div class="card border-0 w-25 m-auto">
            <div class="my_list">
               <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center" v-for="task in tasks">
                     <p :class="{ 'text-decoration-line-through': task.done }">
                        {{task.name}}
                     </p>
                     <button class="btn bg-danger"><i class="fa fa-trash text-white" aria-hidden="true"></i></button>
                  </li>
               </ul>
            </div>
         </div>
         <div class="input-group w-25 m-auto mt-3">
            <input class="form-control" type="text" placeholder="Add a task" v-model="new_task" @keyup.enter="addTask">
            <button class="btn btn-outline-info" type="button" @click="addTask">Add</button>
         </div>
      </div>


   </div>

   <!-- axios -->
   <script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>
   <!-- vue -->
   <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
   <!-- my JS -->
   <script src='./app.js'></script>
   <!-- bs5 -->
   <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'></script>
</body>

</html>