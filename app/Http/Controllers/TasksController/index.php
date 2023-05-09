<?php

$json_path = '../../../../data/tasks.json';

$tasks_string = file_get_contents($json_path);

$tasks = json_decode($tasks_string, true);

header('Content-Type: application/json');
echo $tasks_string;