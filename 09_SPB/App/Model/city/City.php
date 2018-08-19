<?php
namespace App\Model\city;

class City
{
    protected $path;
    protected $data;

    public function __construct(string $path)
    {
        $this->path = $path;
        $this->data = file($this->path, FILE_APPEND);
    }

    public function getText()
    {
        foreach ($this->data as $text) {
            $this->data = $text;
        }
        return $this->data;
    }

    public function upCity(string $data)
    {
        file_put_contents($this->path, $data);
    }

}
