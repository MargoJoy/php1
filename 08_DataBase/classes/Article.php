<?php

class Article
{
    public $id;
    public $title;
    public $text;
    public $author;

    public function __construct($id, $title, $text, $author)
    {
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
    }

}