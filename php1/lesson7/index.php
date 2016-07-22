<?php


$dsn = 'mysql:host=localhost; dbname=profit';
$user = 'root';
$pass = '';

// dbh = data base hanter
// PDO = PHP DATA OBJECTS
$dbh = new PDO($dsn, $user, $pass);

// Подготоваливаем запрос
// statement hanter
$sth = $dbh->prepare('SELECT * FROM persons');

// Выполняем запрос
$sth->execute();

$data = $sth->fetchAll();

var_dump($data);
?>