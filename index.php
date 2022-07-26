<?php

$query = require 'bootstrap.php';
require 'functions.php';
require 'Task.php';

$greeting = "Hello world";

$tasks = $query->selectAll('todos', 'Task');

// dumper($tasks);

require 'index.view.php';
