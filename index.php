<?php

include_once 'applications' . DIRECTORY_SEPARATOR . 'config.php';

spl_autoload_register(function($class) {
    $path = 'applications' . DIRECTORY_SEPARATOR . $class . '.php';
    if (file_exists($path)) {
        include_once $path;
        return true;
    }
    return false;
});

$url = $_SERVER['REQUEST_URI'];
$url_components = explode('/', $url);
$action = 'action';

if (!empty($url_components[1])) {
    $action = $url_components[1];
}
$controller = new Controller();
if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    die('404 error');
}
