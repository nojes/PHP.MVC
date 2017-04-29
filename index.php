<?php

function __autoload($className) {
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    require_once $path;
}

$route = $_GET['r'];
$routeData = explode('/', $route);

if(empty($routeData[0])) {
    $routeData[0] = 'home';
}
if(empty($routeData[1])) {
    $routeData[1] = 'index';
}

$controllerName = '\core\controllers\\' . ucfirst($routeData[0]) . 'Controller';
$actionName = 'action' . ucfirst($routeData[1]);
$path = substr(str_replace('\\', DIRECTORY_SEPARATOR, $controllerName) . '.php', 1);

if(file_exists($path)) {
    $controller = new $controllerName;

    if (method_exists($controller, $actionName)) {
        echo $controller->$actionName();
    } else {
        header('HTTP/1.1 404 Not Found');
        echo 'Page not found.';
    }
} else {
    header('HTTP/1.1 404 Not Found');
    echo 'Page not found.';
}
