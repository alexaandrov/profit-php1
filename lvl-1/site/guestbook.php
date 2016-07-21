<?php

require __DIR__ . '/classes/View.php';
require __DIR__ . '/classes/GuestBook.php';

$guestBook = new GuestBook(__DIR__ . '/dist/db/guest-book.txt', 'note');

$view = new View();
$view->assign('guestbook', $guestBook);
$view->display('guestbook');