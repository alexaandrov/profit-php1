<?php

class View
{
    protected $name;

    protected $data;

    public function __construct() { }

    public function get_model_name()
    {
        (!empty($name)) ? $name : 'index.php';
    }

    public function assign($name, $value)
    {
        $this->name = $name;
        $this->data[$name] = $value;
    }

    public function display($template)
    {
        $model = $this;
        $value = $this->data[$template];
        include __DIR__ . '/../templates/' . $template;
    }

    public function render($template)
    {
        return __DIR__ . '/../templates/' . $template;
    }
}