<?php

class Uploader
{
    protected $field_form_name;

    protected $upload_dir;

    public function __construct($field_form_name, $upload_dir)
    {
        $this->field_form_name = $field_form_name;
        $this->upload_dir = $upload_dir;
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
                    $this->upload_dir . $uploaded['name']
                );
                return true;
            }
        } else {
            return false;
        }
    }
}