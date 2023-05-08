<?php
$todo_string = file_get_contents('todo-list.json');
$todo_array = json_decode($todo_string, true);

var_dump($todo_array);
?>


<!doctype html>
<html lang='en'>

<head>
   <meta charset='utf-8'>
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <title>ToDo List</title>
</head>

<body>
   <div id='app'>

   </div>

   <script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>
   <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
   <script src='./app.js'></script>
</body>

</html>