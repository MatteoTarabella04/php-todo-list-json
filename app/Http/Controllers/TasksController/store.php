<?php

$json_path = '../../../../data/tasks.json';

if (!empty($_POST['new_task'])) {
   $new_task = [
      'name' => ($_POST['new_task']),
      'done' => false
   ];
}

$tasks_string = file_get_contents($json_path);

$tasks_array = json_decode($tasks_string, true);

array_push($tasks_array, $new_task);

$new_tasks_string = json_encode($tasks_array);

file_put_contents($json_path, $new_tasks_string);

header('Content-Type: application/json');
echo $new_tasks_string;