<?php
include __DIR__ . '/GuestBookRecord.php';


class GuestBook
{
    public $path;
    protected $data = [];

    public function __construct($path)
    {
        $this->path = $path;
        $lines = file($this->path, FILE_IGNORE_NEW_LINES);

        foreach ($lines as $line) {
            $this->data[] = new GuestBookRecord($line);
        }
    }

    public function getData()
    {
        return $this->data;
    }

    public function append(GuestBookRecord $record)
    {
        $this->data[] = $record;
        return $this;
    }

    public function save()
    {
        $newLine = [];
        foreach ($this->data as $record) {
            $newLine[] = $record->getMessage();
        }
        file_put_contents($this->path, implode("\n", $newLine));
    }
}