<?php

var_dump($_FILES);

if (!empty($_FILES)) {
    $uploaded = $_FILES['upload-file'];
    if ($uploaded['error'] == 0 && ($uploaded['type'] == 'image/jpeg' || $uploaded['type'] == 'image/png')) {
        move_uploaded_file(
            $uploaded['tmp_name'],
            __DIR__ . '/img/' . $uploaded['name']
        );
        header('Location:' . __DIR__ . '/submit.php');
    } else {
        echo "Неверный формат изображения";
    }
}

?>