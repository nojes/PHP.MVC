<?php
namespace core\app\controllers;

use core\app\components\Component;

class View extends Component
{
    public $title;

    protected $_layout;
    protected $_css = [];

    public function __construct()
    {
        parent::__construct();

        $this->_config[lcfirst(__CLASS__)]['baseLayout'];
    }

    public function renderCss()
    {
        foreach($this->_css as $css) {
            echo '<link rel="stylesheet" href="' . $this->_config['cssDir'] . $css .  '"';
        }
    }
}