<?php
require_once __DIR__ . '/Article.php';

class News
{
    protected $data;

    public function __construct($way)
    {
        $this->way = $way;
        $arrNews = include $way;
        foreach ($arrNews as $value){
            $this->data[] = new Article($value['title'], $value['text']);
        }
    }
    public function getData()
    {
        return $this->data;
    }
}