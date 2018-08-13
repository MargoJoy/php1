<?php
require_once __DIR__ . '/Article.php';
require_once __DIR__ . '/Db.php';

class News
{
    protected $data;

    public function __construct()
    {
        $db = new Db();
        $dataNews = $db->query('SELECT * FROM news');

        foreach ($dataNews as $value){
            $this->data[] = new Article($value['title'], $value['text']);
        }
    }
    public function getData()
    {
        return $this->data;
    }
}