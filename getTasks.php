<?php
$todo_string = file_get_contents('todo-list.json');
$todo_array = json_decode($todo_string, true);

header('Content-Type: application/json');

var_dump($todo_array);
?>