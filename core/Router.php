<?php

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function load($file)
    {
        $router = new static;
        require $file;
        return $router;
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
        if (array_key_exists($uri, $this->routes[$method]))
        {
            explode('@',$this->routes[$method][$uri]);
            return $this->callAction(...explode('@',$this->routes[$method][$uri]));
        }

        throw new Exception('No routes define for this uri');
    }

    public function callAction($controller, $action)
    {
        $controller = new $controller;

        if(! method_exists($controller, $action)) {
            throw new Exception("controller does not respond to the action");
        }
        return $controller->$action();
    }
}