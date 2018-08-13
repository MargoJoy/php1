<?php

class Article
{
    public $id;
    public $title;
    public $text;

    public function __construct($title, $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function getArticle()
    {
        return $this;
    }
}