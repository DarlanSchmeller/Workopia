<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */
function basePath($path = '') {
    return __DIR__ . '/' . $path;
}

/**
 * Load a view
 * 
 * @param string $name
 * @return void
 * 
 */
function loadView($name) {
    $viewPath = basePath("views/" . $name . '.view.php');

    if(file_exists($viewPath)) {
        require $viewPath;
    } else {
        return 'View ' . $viewPath . ' not found';
    }
}
/**
 * Load a Partial
 * 
 * @param string $name
 * @return void
 * 
 */
function loadPartial($name) {
    $partialPath = basePath("views/partials/" . $name . '.php');

    if(file_exists($partialPath)) {
        require $partialPath;
    } else {
        return 'Partial ' . $partialPath . ' not found';
    }
}

/**
 * Inspect a value
 *
 * @param mixed $command
 * @return void
 */
function inspect($command) {
    echo '<pre>' . var_dump($command) . '</pre>';
}

/**
 * Inspect a value and die
 *
 * @param mixed $command
 * @return void
 */
function inspectAndDie($command) {
    echo '<pre>' . var_dump($command) . '</pre>';
    die();
}