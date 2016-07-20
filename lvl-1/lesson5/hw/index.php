<?php

class GuestBook
{
    protected $file_address;
    protected $data;

    public function __construct($file)
    {
        $this->file_address = $file;
        $this->data = file($file);
    }

    public function getData()
    {
        return $this->data;
    }

    public function append($text)
    {
        $this->data[] = $text;

        $result = implode("\n", $this->data);

        file_put_contents($this->file_address, $result);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>ООП. Класс GuestBook</title>
</head>
<body>
<p>Выбирете файл</p>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="upload-file">
    <input type="submit" value="Отправить">
</form>
<?php
// $guestBook = new GuestBook(__DIR__ . '/guest-book.txt');

// $guestBook->append("New texline");
?>
</body>
</html>