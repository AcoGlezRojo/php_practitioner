<?php

namespace App\Classes;

class Request
{
    public static function uri()
    {
        // dumper($_SERVER);

        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
