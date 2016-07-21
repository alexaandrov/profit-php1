<?php

require __DIR__ . '/../classes/View.php';
require __DIR__ . '/../classes/Article.php';

$book = new Article(__DIR__ . '/../dist/db/guest-book.txt', $_GET['id']);

$view = new View();

$view->assign('book', $book);
$view->display(__DIR__ . '/../templates/' . 'book.php');