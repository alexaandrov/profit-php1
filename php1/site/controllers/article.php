<?php

require __DIR__ . '/../classes/View.php';
require __DIR__ . '/../classes/Article.php';
require __DIR__ . '/../classes/News.php';
require __DIR__ . '/../classes/Db.php';


$params = require_once __DIR__ . '/../configs/db.php';

$db = new Db($params);
$data = $db->query('SELECT * FROM news where id=:id', [':id' => $_GET['id']]);

$article = new Article($data);

$view = new View();

$view->assign('article', $article);
$view->display(__DIR__ . '/../templates/' . 'article.php');