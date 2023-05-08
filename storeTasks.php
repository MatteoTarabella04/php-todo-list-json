<?php

if (!empty($_POST['new_task'])) {
   $new_task = ($_POST['new_task']);
}

$tasks_string = file_get_contents('tasks.json');

$tasks_array = json_decode($tasks_string, true);

array_push($tasks_array, $new_task);

$new_tasks_string = json_encode($tasks_array);

file_put_contents('tasks.json', $new_tasks_string);

header('Content-Type: application/json');
echo $new_tasks_string;