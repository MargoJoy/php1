<?php
include __DIR__ . '/TextFile.php';


class GuestBook extends TextFile
{
//добавляет новую запись к массиву записей
    public function append($text)
    {
        $this->data[] = $text;
        return $this;
    }
//сохраняет массив в файл
    public function save()
    {
        $newLine = implode("\n", $this->data);
        file_put_contents($this->path, $newLine);
    }
}