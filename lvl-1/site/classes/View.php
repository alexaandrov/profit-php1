<?php

class View
{
    protected $name;

    protected $data;

    public function __construct() { }

    public function get_model_name()
    {
        return $this->name;
    }

    public function assign($name, $value)
    {
        $this->name = $name;
        $this->data = $value;
    }

    public function display($template)
    {
        $template_name = $this->name;
        $$template_name = $this->data;
        include $template;
    }

    public function render($template)
    {
        return __DIR__ . '/../templates/' . $template . '.php';
    }
}