<?php

require __DIR__ . '/../classes/View.php';
require __DIR__ . '/../classes/Notes.php';
require __DIR__ . '/../classes/News.php';
require __DIR__ . '/../classes/Db.php';

$db = new Db(require_once __DIR__ . '/../configs/db.php');
$data = $db->query('SELECT * FROM news');

$news = new News($data, 'note');

$view = new View();
$view->assign('news', $news);
$view->display(__DIR__ . '/../templates/' . 'news.php');
