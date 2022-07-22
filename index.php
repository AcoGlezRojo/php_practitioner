<?php

require 'functions.php';

$greeting = "Hello world";

$person = [
    'age' => 31,
    'hair' => 'brown',
    'career' => 'web developer'
];

$person['name'] = 'Jeff';

dumper($person);

require 'index.view.php';
