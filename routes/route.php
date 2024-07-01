<?php

use App\Controllers\UserController;
use App\Controllers\DashboardController;
use App\Controllers\Auth\LoginController;

$routes = [
    '/login' => [
        'controller' => LoginController::class,
        'method' => 'showLoginForm',
        'type' => 'get'
    ],
    '/make-login' => [
        'controller' => LoginController::class,
        'method' => 'login',
        'type' => 'post'
    ],
    '/logout' => [
        'controller' => LoginController::class,
        'method' => 'logout',
        'type' => 'post'
    ],
    '/dashboard' => [
        'controller' => DashboardController::class,
        'method' => 'index',
        'type' => 'get'
    ],
    '/users' => [
        'controller' => UserController::class,
        'method' => 'index',
        'type' => 'get'
    ],
    '/user/{id}/edit' => [
        'controller' => UserController::class,
        'method' => 'edit',
        'type' => 'get'
    ],
    '/user/{id}/show' => [
        'controller' => UserController::class,
        'method' => 'show',
        'type' => 'get'
    ],
];

function handleRequest($routes)
{
    $uri = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];
    if ($uri == '/') {
        if (is_user_logged_in()) {
            $uri = '/dashboard';
        } else {
            redirect_to('login');
        }
    } 
    
    foreach ($routes as $route => $routeData) {
        $route = str_replace('/', '\/', $route);
        $route = preg_replace('/{[a-zA-Z]+}/', '([a-zA-Z0-9]+)', $route);
        $route = '/^' . $route . '$/';
        $type = $routeData['type'];
        
        if (preg_match($route, $uri, $matches) && $method === 'GET' && $type === 'get') {
            $controller = new $routeData['controller']();
            $controller->{$routeData['method']}($matches[1] ?? null);
            return;
        }

        if (preg_match($route, $uri, $matches) && $method === 'POST' && $type === 'post') {
            $controller = new $routeData['controller']();
            $controller->{$routeData['method']}($matches[1] ?? null);
            return;
        }
    }
    
    die('404');
}
