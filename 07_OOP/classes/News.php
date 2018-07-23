<?php
require_once __DIR__ . '/Article.php';

class News
{
    protected $data;

    public function __construct($way)
    {
//путь к файлу с новостями
        $this->way = $way;
//подключение файла с новостями
        $arrNews = include $way;
//цикл перебора массива с новостями
        foreach ($arrNews as $value){
            $this->data[] = new Article($value);
        }
    }
//доступ к защищенному методу
    public function getData()
    {
        return $this->data;
    }
}