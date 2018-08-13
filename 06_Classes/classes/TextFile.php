<?php
class TextFile
{
    public $path;
    protected $data;

    public function __construct($path)
    {
        $this->path = $path;

        $this->data = file($path, FILE_IGNORE_NEW_LINES);
    }

    public function getData()
    {
        return $this->data;
    }

}