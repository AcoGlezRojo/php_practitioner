<?php

function dumper($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}