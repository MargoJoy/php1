<?php
include __DIR__ . '/TextFile.php';


class GuestBook extends TextFile
{

    public function append($text)
    {
        $this->data[] = $text;
        return $this;
    }

    public function save()
    {
        $newLine = implode("\n", $this->data);
        file_put_contents($this->path, $newLine);
    }
}