<?php

namespace App\Classes;

use Exception;

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load()
    {
        $router = new static;
        require 'routes.php';
        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $method)
    {
        if (array_key_exists($uri, $this->routes[$method])) {
            return $this->callAction(
                ...explode('@', $this->routes[$method][$uri])
            );
        }

        throw new Exception('No route defined for this URL');
    }

    protected function callAction($controller, $action)
    {
        $controller = "Controllers\\{$controller}";
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new Exception("{$controller} does not respond to the {$action}");
        }

        return $controller->$action();
    }
}
