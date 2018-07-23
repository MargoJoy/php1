<?php
require __DIR__ . '/GuestBookRecordtestTest.php';
class GuestBook
{
    protected $records;

    public function __construct()
    {
        $lines = file(__DIR__ . '/../text.txt', FILE_IGNORE_NEW_LINES );
        $this->records = [];
        foreach ($lines as $line) {
            $this->records[] = new GuestBookRecord($line);
        }
    }

    public function getRecor()
    {
        return $this->records;
    }

    public function add(GuestBookRecord $record)
    {
        $this->records[] = $record;
    }
}