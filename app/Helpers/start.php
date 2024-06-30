<?php

if (!function_exists('view')) {
    function view($view, $data = [])
    {
        extract($data);
        require_once __DIR__ . "/../../views/{$view}.php";
    }
}

if (!function_exists('routeIs')) {
    function routeIs($route)
    {
        return $_SERVER['REQUEST_URI'] === $route && $_SERVER['REQUEST_METHOD'] === 'GET';
    }
}

// redirect_with
if (!function_exists('redirect_with')) {
    function redirect_with_data($url, $data = [])
    {
        // Store the data in the session
        foreach ($data as $key => $value) {
            $_SESSION[$key] = $value;
        }

        // Redirect
        redirect_to($url);
    }
}

if (!function_exists('current_user')) {
    function current_user()
    {
        if (is_user_logged_in()) {
            return $_SESSION['email'];
        }
        return null;
    }
}

if (!function_exists('require_login')) {
    function require_login(): void
    {
        if (!is_user_logged_in()) {
            redirect_to('login');
        }
    }
}

if (!function_exists('is_user_logged_in')) {
    function is_user_logged_in(): bool
    {
        return isset($_SESSION['email']);
    }
}

if (!function_exists('redirect_to')) {
    function redirect_to($location)
    {
        header("Location: $location");
        exit;
    }
}
