<?php

ob_start();
session_start();

require_once 'vendor/autoload.php';
require_once './config/database.php';
require_once './routes/route.php';

handleRequest($routes);