<?php
class TextFile
{
    public $path;
    protected $data;
//путь до файла с данными гостевой книги
    public function __construct($path)
    {
        $this->path = $path;
//чтение данных из гостевой книги
        $this->data = file($path, FILE_IGNORE_NEW_LINES);
    }

//возвращает массив записей гостевой книги
    public function getData()
    {
        return $this->data;
    }

}