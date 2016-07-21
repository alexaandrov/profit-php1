<?php

class Notes
{
    protected $field_form_name;

    protected $file_address;

    protected $data;

    public function __construct($file_address, $field_form_name)
    {
        $this->file_address = $file_address;
        $this->field_form_name = $field_form_name;
        if (is_array($file_address)) {
            $this->data = $file_address;
        } else {
            $this->data = file($this->file_address);
        }
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
        file_put_contents($this->file_address, $this->data);
    }
}