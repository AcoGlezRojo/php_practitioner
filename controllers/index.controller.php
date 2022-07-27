<?php

require 'models/Task.php';

$greeting = "Hello world";

$tasks = $app['database']->selectAll('todos', 'Task');

// dumper($tasks);

require 'views/index.view.php';
