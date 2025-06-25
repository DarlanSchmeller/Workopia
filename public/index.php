<?php
require __DIR__ . '/../vendor';
require_once('../helpers.php');

// Require needed classes if they are called and exist
// spl_autoload_register(function ($class) {
//     $path = basePath('Framework/' . $class . '.php');

//     if(file_exists($path)) {
//         require_once $path;
//     }
// });

// Instantiate new Router object
$router = new Router();

// Get routes
$routes = require basePath('routes.php');

// Get current URI and HTTP Method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Route the request
$router->route($uri, $method);