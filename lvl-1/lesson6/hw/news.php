<?php

require __DIR__ . '/classes/View.php';
require __DIR__ . '/classes/Notes.php';
require __DIR__ . '/classes/News.php';

$news = new News(__DIR__ . '/dist/db/news.txt', 'note');

$view = new View();
$view->assign('news.php', $news);
$view->display('news.php');
