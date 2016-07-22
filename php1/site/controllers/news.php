<?php

require __DIR__ . '/../autoload.php';

$db = new Db(require_once __DIR__ . '/../configs/db.php');
$data = $db->query('SELECT * FROM news');

$news = new News($data, 'note');

$view = new View();
$view->assign('news', $news);
$view->display(__DIR__ . '/../templates/' . 'news.php');
