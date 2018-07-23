<?php

class Image
{
    protected $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function getImg()
    {
        return $this->file;
    }

}