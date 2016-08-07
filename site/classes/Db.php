<?php

class Db
{
    protected $dbh;

    public function __construct($configFile)
    {
        $this->dbh = new PDO(
            $configFile['dsn'],
            $configFile['username'],
            $configFile['password']
        );
    }

    protected function execute(string $sql)
    {
        if ($this->dbh->prepare($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function query(string $sql, array $data = null)
    {
        if ($this->execute($sql)) {
            $sth = $this->dbh->prepare($sql);
            $sth->execute($data);
            return $sth->fetchAll();
        } else {
            return false;
        }
    }
}