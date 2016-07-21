<?php

require __DIR__ . '/../classes/View.php';
require __DIR__ . '/../classes/Article.php';

$article = new Article(__DIR__ . '/../dist/db/guest-book.txt', $_GET['id']);

$view = new View();

$view->assign('book', $article);
$view->display(__DIR__ . '/../templates/' . 'book.php');