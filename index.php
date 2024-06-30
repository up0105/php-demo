<?php

ob_start();
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once 'vendor/autoload.php';
require_once './config/database.php';
require_once './routes/route.php';

handleRequest($routes);

// use App\Controllers\UserController;

// $userController = new UserController();
// echo $userController->index();