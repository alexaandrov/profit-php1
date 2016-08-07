<?php

$images = ['code.jpg', 'docs.png',
           'service.png', 'wallpapers1.jpg'];

function get_image($images) {
    if (!empty($_GET['id']) && $_GET['id'] < count($images) && $_GET['id'] > 0) {
        return $images[$_GET['id']];
    } else {
        return $images[0];
    }
}

?>

<!DOCTYPE php>
<html>
<head>
    <title></title>
</head>
<body>
<style>
    img {
        width: 300px;
        height: 300px;
    }
</style>
<div>
    <img src="<?= 'img/' . get_image($images); ?> " alt="image">
</div>
</body>
</html>