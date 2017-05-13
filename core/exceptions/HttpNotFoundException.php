<?php
namespace core\exceptions;


class HttpNotFoundException extends \Exception
{
    public function showErrorPage()
    {
        header('HTTP/1.1 404 Not Found');
        // todo: view file
    }
}