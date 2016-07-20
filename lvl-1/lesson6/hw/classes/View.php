<?php

class View
{
    protected $data;

    public function __construct() { }

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display($template)
    {
        $value = $this->data[$template];
        include __DIR__ . '/../templates/' . $template;
    }

    public function render($template)
    {
        return __DIR__ . '/../templates/' . $template;
    }
}