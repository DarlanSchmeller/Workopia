<?php
require __DIR__ . '/../vendor/autoload.php';

use Framework\Router;
use Framework\Session;

Session::start();

require_once('../helpers.php');

// Instantiate new Router object
$router = new Router();

// Get routes
$routes = require basePath('routes.php');

// Get current URI and HTTP Method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Route the request
$router->route($uri);
