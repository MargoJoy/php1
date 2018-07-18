<?php
$path = __DIR__ . '/text.txt';


function read()
{
//читает файл и возвращает массив записей гостевой книги
    return file(__DIR__ . '/text.txt', FILE_IGNORE_NEW_LINES);
}


