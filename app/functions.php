<?php

function dumper($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function view($name, $data = [])
{
    extract($data);
    return require "views/{$name}.view.php";
}
