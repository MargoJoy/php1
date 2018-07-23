<?php
include __DIR__ . '/GuestBookRecord.php';


class GuestBook
{
    public $path;
    protected $data = [];

//путь до файла с данными гостевой книги
    public function __construct($path)
    {
        $this->path = $path;
//Строки в файле
        $lines = file($this->path, FILE_IGNORE_NEW_LINES);

//каждую строчку делаем обьектом
        foreach ($lines as $line) {
            $this->data[] = new GuestBookRecord($line);
        }
    }

//возвращает массив записей гостевой книги
    public function getData()
    {
        return $this->data;
    }
//добавляет новую запись к массиву записей
    public function append(GuestBookRecord $record)
    {
        $this->data[] = $record;
        return $this;
    }
//сохраняет массив в файл
    public function save()
    {
        $newLine = [];
        foreach ($this->data as $record) {
            $newLine[] = $record->getMessage();
        }
        file_put_contents($this->path, implode("\n", $newLine));
    }
}