<?php

class GuestBook
{
    protected $field_form_name;

    protected $file_address;

    protected $data;

    public function __construct($file_address, $field_form_name)
    {
        $this->file_address = $file_address;
        $this->field_form_name = $field_form_name;
        $this->data = file($this->file_address);
    }


    public function getData()
    {
        return $this->data;
    }

    public function upload()
    {
        if ($this->putData()) {
            $this->save();
        }
    }

    protected function isUploaded()
    {
        return (!empty($_GET[$this->field_form_name])) ? true : false;
    }

    protected function putData()
    {
        if ($this->isUploaded()) {
            $note = $_GET[$this->field_form_name];
            $this->data[] = "\n" . $note;
            return true;
        } else {
            return false;
        }
    }

    protected function save()
    {
        // $result = implode("\n", $this->data);

        file_put_contents($this->file_address, $this->data);
    }
}

class Uploader
{
    protected $field_form_name;

    public function __construct($field_form_name)
    {
        $this->field_form_name = $field_form_name;
    }

    protected function isUploaded()
    {
        return (!empty($_FILES) && !empty($_FILES[$this->field_form_name])) ? true : false;
    }

    public function upload()
    {
        if ($this->isUploaded()) {
            $uploaded = $_FILES[$this->field_form_name];
            if ($uploaded['error'] == 0) {
                move_uploaded_file(
                    $uploaded['tmp_name'],
                    __DIR__ . '/img/' . $uploaded['name']
                );
                return true;
            }
        } else {
            return false;
        }
    }
}

// GuestBook
$guestBook = new GuestBook(__DIR__ . '/guest-book.txt', 'note');

// Uploader
$uploader = new Uploader('upload-file');

?>

<!DOCTYPE html>
<html>
<head>
    <title>ООП. Класс GuestBook</title>
</head>
<style>
    h1 {
        text-align: center;
    }
</style>
<body>
<h1>Lesson 5. Homework</h1>
<h2>Guest Book</h2>
<form action="index.php" method="GET">
    <input type="text" name="note" value="<?php if (!empty($_GET['note'])) echo $_GET['note'] ?>">
    <input type="submit" value="Отправить">
</form>
<p>Записи в гостевой книге:</p>
<?php
$guestBook->upload();
?>
<?php foreach ($guestBook->getData() as $file_string): ?>
    <div><p><?= $file_string ?></p></div>
<?php endforeach ?>
<hr>
<h2>File Manager</h2>
<p>Выбирете файл</p>
<form action="index.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="upload-file">
    <input type="submit" value="Отправить">
</form>
<p>Статус:</p>
<?php echo ($uploader->upload()) ? "Файл загружен" : "Файл не загружен"; ?>
</body>
</html>