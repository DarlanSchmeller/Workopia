<?php
require_once('../helpers.php');
require basePath('Router.php');
require_once basePath('Database.php');

// Instantiate new Router object
$router = new Router();

// Get routes
$routes = require basePath('routes.php');

// Get current URI and HTTP Method
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Route the request
$router->route($uri, $method);