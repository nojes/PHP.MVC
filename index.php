<?php

function __autoload($className) {
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    require_once $path;
}

