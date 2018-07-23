<?php

class Article
{
    protected $article;

    public function __construct($article)
    {
        $this->article = $article;
    }

    public function getArticle()
    {
        return $this->article;
    }

}