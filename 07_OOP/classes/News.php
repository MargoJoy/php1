<?php
require_once __DIR__ . '/Article.php';

class News
{
    public $path;
    protected $data = [];

    public function __construct(string $path)
    {
        $this->path = $path;
        $arrNews = include $path;
        foreach ($arrNews as $article){
            $this->data[] = new Article($article['title'], $article['text']);
        }
    }

    public function getData()
    {
        return $this->data;
    }

}
