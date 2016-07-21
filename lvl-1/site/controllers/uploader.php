<?php

require __DIR__ . '/../classes/View.php';
require __DIR__ . '/../classes/Uploader.php';

$uploader = new Uploader('upload-file', __DIR__ . '/../dist/img/');

$view = new View();
$view->assign('uploader', $uploader);
$view->display(__DIR__ . '/../templates/' . 'uploader.php');