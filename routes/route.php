<?php

use App\Controllers\UserController;

$routes = [
    '/' => [
        'controller' => UserController::class,
        'method' => 'index'
    ],
    '/user{id}' => [
        'controller' => UserController::class,
        'method' => 'user',
    ]
];

function handleRequest($routes)
{
    $uri = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];
    
    foreach ($routes as $route => $routeData) {
        $route = str_replace('/', '\/', $route);
        $route = preg_replace('/{[a-zA-Z]+}/', '([a-zA-Z0-9]+)', $route);
        $route = '/^' . $route . '$/';
        
        if (preg_match($route, $uri, $matches) && $method === 'GET') {
            $controller = new $routeData['controller']();
            $controller->{$routeData['method']}($matches[1] ?? null);
            return;
        }
    }
    
    die('404');
}
