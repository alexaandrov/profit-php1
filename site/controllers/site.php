<?php

require __DIR__ . '/../classes/View.php';



// dbh = data base hanter
// PDO = PHP DATA OBJECTS
//$dbh = new PDO($dsn, $user, $pass);

// Подготоваливаем запрос
// statement hanter
//$sth = $dbh->prepare('
//    SELECT * FROM persons
//    WHERE age>:age
//    ');
//
//// Выполняем запрос
//$sth->execute([':age' => 40]);
//
//$data = $sth->fetchAll();

$view = new View();
$view->display(__DIR__ . '/../templates/' . 'site.php');