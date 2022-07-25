<?php

require 'functions.php';

require 'Task.php';

$pdo = connectToDb();

$tasks = getAllTaskt($pdo);

$greeting = "Hello world";

// $tasks = [
//     new Task('Go to the store'),
//     new Task('Go to the gym'),
//     new Task('Clean my room')
// ];

// $tasks[0]->complete();

// dumper($tasks);

require 'index.view.php';
