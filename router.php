<?php

$routes = require basePath('routes.php');

if(array_key_exists($uri, $routes)) {
    require_once(basePath($routes[$uri]));
} else {
    http_response_code('404');
    require_once(basePath($routes['404']));
}