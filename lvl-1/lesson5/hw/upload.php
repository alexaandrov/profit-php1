<?php

class Uploader
{
    protected $field_form_name;

    public function __construct($name)
    {
        $this->field_form_name = $name;
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

    public function test()
    {
        var_dump($this->field_form_name);
        var_dump($_FILES);

        echo "\n" . $this->isUploaded();
    }
}

$uploader = new Uploader('upload-file');
echo ($uploader->upload()) ? "Файл загружен" : "Файл не загружен";
?>