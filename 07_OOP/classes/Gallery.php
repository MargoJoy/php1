<?php
require_once __DIR__ . '/Image.php';

class Gallery
{
    protected $path;
    protected $data = [];

    public function __construct($path)
    {
        $this->path = $path;
        $images = scandir($this->path);
        foreach ($images as $image){
            if ($image == '.' || $image == '..') {
                $images = array_diff($images, ['.', '..']);
            } else {
                $this->data[] = new Image($image);
            }
        }
    }

    public function getData()
    {
        return $this->data;
    }
}
