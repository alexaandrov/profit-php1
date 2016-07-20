<?php

require __DIR__ . '/GuestBookRecord.php';

class GuestBook
{
    protected $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function getAll()
    {
        $data = file($this->file);
        $res = [];
        foreach ($data as $line) {
            $res[] = new GuestBookRecord($line);
        }
        return $res;
    }
}

?>