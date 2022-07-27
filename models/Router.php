<?php

class Router
{
    protected $routes = [];

    public static function load()
    {
        $router = new static;
        require 'routes.php';
        return $router;
        // require $file;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No route defined for this URL');
    }
}
