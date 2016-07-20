<?php

require __DIR__ . '/classes/View.php';
require __DIR__ . '/classes/GuestBook.php';
require __DIR__ . '/classes/Uploader.php';
require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/Article.php';

$view = new View();

$guestBook = new GuestBook(__DIR__ . '/dist/db/guest-book.txt', 'note');
$uploader = new Uploader('upload-file', __DIR__ . '/dist/img/');
$news = new News(__DIR__ . '/dist/db/news.txt', 'note');

// $view->assign('guestbook.php', $guestBook);
// $view->assign('uploader.php', $uploader);

// $view->display('guestbook.php');
// $view->display('uploader.php');

$view->assign('news.php', $news);
$view->display('news.php');