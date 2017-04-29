<?php

function __autoload($className) {
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    require_once $path;
}

$route = $_GET['r'];
$routeData = explode('/', $route);

$controllerName = $routeData[0];
$actionName = $routeData[1];

var_dump($_GET);
var_dump($routeData);
