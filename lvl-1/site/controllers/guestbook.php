<?php

require __DIR__ . '/../autoload.php';

$guestbook = new \Models\GuestBook(__DIR__ . '/../dist/db/guest-book.txt', 'note');

$view = new View();
$view->assign('guestbook', $guestbook);
$view->display(__DIR__ . '/../templates/'. 'guestbook.php');