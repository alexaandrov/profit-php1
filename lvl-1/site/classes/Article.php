<?php

class Article
{
    protected $id;

    protected $data;

    protected $file_address;

    public function __construct($file_address, $id)
    {
        $this->file_address = $file_address;
        $this->id = $id;
        $this->data = file($this->file_address);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getArticle($id)
    {
        return $this->data[$this->getId()];
    }
}