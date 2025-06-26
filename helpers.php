<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */
function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * Load a view
 * 
 * @param string $name
 * @param array data
 * @return void
 * 
 */
function loadView($name, $data = [])
{
    $viewPath = basePath("App/views/" . $name . '.view.php');

    if (file_exists($viewPath)) {
        extract($data);

        require $viewPath;
    } else {
        echo 'View ' . $viewPath . ' not found';
    }
}
/**
 * Load a Partial
 * 
 * @param string $name
 * @return void
 * 
 */
function loadPartial($name)
{
    $partialPath = basePath("App/views/partials/" . $name . '.php');

    if (file_exists($partialPath)) {
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
function inspect($command)
{
    echo '<pre>';
    var_dump($command);
    echo  '</pre>';
}

/**
 * Inspect a value and die
 *
 * @param mixed $command
 * @return void
 */
function inspectAndDie($command)
{
    echo '<pre>';
    var_dump($command);
    echo  '</pre>';
    die();
}

/**
 * Format salary
 * 
 * @param string $salary
 * @return string Formatted Salary
 */
function formatSalary($salary)
{
    return '$' . number_format(floatval($salary));
}

/**
 * Sanitize Data
 * 
 * @param string $dirty
 * @return string
 */
function sanitize($dirty)
{
    return filter_var(trim($dirty), FILTER_SANITIZE_SPECIAL_CHARS);
}