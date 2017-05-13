<?php
namespace core\app\components;


class Component
{
    protected $_config = [];

    public function __construct()
    {
        $className = substr(static::class, strpos(static::class, '\\'));

        $this->_config = require_once 'app/' . $className;
    }
}