<?php
require_once __DIR__ . '/Article.php';

class News
{
    protected $query;
    protected $bdnews;

    public function __construct($query)
    {
        $this->query = $query;
        foreach ($this->query as $news) {
            $this->bdnews[] = new Article($news);
        }
    }

    public function getData()
    {
        return $this->bdnews;
    }

}
