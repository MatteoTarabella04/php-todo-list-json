<?php

$json_path = '../../../../data/tasks.json';

$deleteTask = $_POST['taskToDelete'];

$tasks_string = file_get_contents($json_path);

$tasks_array = json_decode($tasks_string, true);

array_splice($tasks_array, $deleteTask, 1);

$new_tasks_string = json_encode($tasks_array);

file_put_contents($json_path, $new_tasks_string);

header('Content-Type: application/json');
echo $new_tasks_string;