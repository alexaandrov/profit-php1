<?php

var_dump($_FILES);

if (!empty($_FILES)) {
    $uploaded = $_FILES['upload-file'];
    if ($uploaded['error'] == 0) {
        move_uploaded_file(
            $uploaded['tmp_name'],
            __DIR__ . '/img/' . $uploaded['name']
        );
    }
}

?>