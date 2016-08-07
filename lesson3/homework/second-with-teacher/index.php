<?php $images = include __DIR__ . '/data.php'; ?>

<!DOCTYPE php>
<html>
<head>
    <title>Фотогалерея</title>
</head>
<body>
<style>
    img {
        width: 300px;
        height: 300px;
    }
    img:hover {
        /*border-radius: 100px;*/
        box-shadow: 2px 2px 5px #7C7C7C;
    }
    h1 {
        text-align: center;
    }
</style>
<div>
    <h1>Фотогалерея</h1>

    <h2>Фото по ID</h2>
    <form action="image.php" method="GET">
        <input type="number" name="id" value="">
        <input type="submit" value="Отобразить">
    </form>

    <h2>Фото по названию</h2>
    <form action="image.php" method="GET">
        <input type="text" name="name" value="">
        <input type="submit" value="Отобразить">
    </form>

    <h2>Загрузить изображение</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="upload-file">
        <input type="submit">
    </form>

    <h2>Все фото</h2>
    <?php foreach ($images as $key => $image): ?>
        <p class="image-name"><?= $image ?></p>
        <a href="image.php?id=<?= $key; ?>"><img src="<?= 'img/' . $image; ?> " alt="image"></a>
    <?php endforeach ?>

</div>
</body>
</html>