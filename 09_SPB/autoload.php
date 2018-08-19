<?php
//авто подключение нужного класса при работы с ним
function __autoload($class)
{
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
}

