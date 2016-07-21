<?php

require __DIR__ . '/../classes/Notes.php';

class Article
{
    protected $id;

    protected $data;

    protected $file_address;

    public function __construct($file_address, $id= null)
    {
        $this->file_address = $file_address;
        $this->id = $id;
        if (is_array($file_address)) {
            $this->data = $file_address;
        } else {
            $this->data = file($this->file_address);
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getArticle($id = null)
    {
        return (empty($this->id)) ? $this->data[0] : $this->data[$this->getId()];
    }
}