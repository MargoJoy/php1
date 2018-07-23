<?php
require_once __DIR__ . '/Image.php';

class Gallery
{
    protected $path;
    protected $data = [];

    public function __construct(string $path)
    {
//путь до директории
        $this->path = $path;
//сканируем директорию по указанному пути
        $images = scandir($this->path);
//перебираем массив
        foreach ($images as $image) {
//если найденны указанные элементы убираем их
            if (($image == '.') || ($image == '..')) {
                $images = array_diff($images, ['.', '..']);
            } else {
//делаем каждый элемент массива, объектом класса Image и присваиваем защищенному свойству
                $this->data[] = new Image($image);
            }
        }
    }

    public function show()
    {
//возвращаем свойство
        return $this->data;
    }



}