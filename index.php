<?php

function __autoload($className) {
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    require_once $path;
}

$route = $_GET['r'];
$routeData = explode('/', $route);

$controllerName = '\core\controllers\\' . ucfirst($routeData[0]) . 'Controller';
$actionName = 'action' . ucfirst($routeData[1]);

$controller = new $controllerName;
echo $controller->$actionName();
