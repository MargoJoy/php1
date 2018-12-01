<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 004 04.11.18
 * Time: 23:07
 */

class TextFile
{
    public $path;
    protected $data;

// передается путь до файла с данными гостевой книги, в нём же происходит чтение данных из ней (используйте защищенное свойство объекта для хранения данных)
    public function __construct($path)
    {
        $this->path = $path;
        $this->data = file($path, FILE_IGNORE_NEW_LINES);
    }

//возвращает массив записей гостевой книги
    public function getData()
    {
        return $this->data;
    }
}