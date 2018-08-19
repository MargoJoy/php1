<?php
namespace App\Model\gallery;


class Image
{
    public $id;
    public $description;
    public $name;

    public function __construct($id, $description, $name)
    {
        $this->id = $id;
        $this->description = $description;
        $this->name = $name;
    }
}