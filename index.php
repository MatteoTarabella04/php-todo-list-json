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
   <title>ToDo List</title>
</head>

<body>
   <div id='app'>


      <div class="container">
         <h1>ToDo List</h1>

         <ul>
            <li v-for="task in tasks">
               {{task}}
            </li>
         </ul>
         <input class="form-control" type="text" placeholder="Add a task" v-model="new_task" @keyup.enter="addTask">
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