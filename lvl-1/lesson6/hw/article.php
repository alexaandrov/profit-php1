<?php

require __DIR__ . '/classes/View.php';
require __DIR__ . '/classes/Article.php';

$article = new Article(__DIR__ . '/dist/db/news.txt', $_GET['id']);

$view = new View();

$view->assign('article.php', $article);
$view->display('article.php');