<?php

function __autoload($class)
{
    require __DIR__ . '/classes/' . $class . '.php';
}