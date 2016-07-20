<!DOCTYPE html>
<html>
<head>
    <title>Урок 6. ООП</title>
</head>
<body>
<?php

class GuestBookRecord
{
    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }
}

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

$gb = new GuestBook(__DIR__ . '/db.txt', FILE_IGNORE_NEW_LINES);

var_dump($gb->getAll());

?>
</body>
</html>