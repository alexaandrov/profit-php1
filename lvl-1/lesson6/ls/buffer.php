<?php

ob_start();

echo 'Hello!';

$str = ob_get_contents();
ob_end_clean();

var_dump($str);
echo 'World';
?>