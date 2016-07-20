<?php

require __DIR__ . '/classes/View.php';
require __DIR__ . '/classes/GuestBook.php';
require __DIR__ . '/classes/Uploader.php';

$view = new View();

$guestBook = new GuestBook(__DIR__ . '/dist/db/guest-book.txt', 'note');
$uploader = new Uploader('upload-file', __DIR__ . '/dist/img/');

$view->assign('guestbook.php', $guestBook);
$view->assign('uploader.php', $uploader);

$view->display('guestbook.php');
$view->display('uploader.php');