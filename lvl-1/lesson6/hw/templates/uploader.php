<html>
<head>
    <title>Uploader</title>
</head>
<style>
    h1 {
        text-align: center;
    }
    article {
        border: 1px #3ED248 dotted;
        border-radius: 3px;
        margin: 15px;
        padding: 10px;
    }
    article:hover {
        border: 1px solid #008419;
        cursor: pointer;
    }
    input {
        padding: 0.5em;
    }
    input[type="submit"] {
        background-color: #656765;
        color: white;
        padding: 0.5em 20px;
    }
    input[type="submit"]:hover {
        background-color: #A2A2A2;
        cursor: pointer;
    }
</style>
<body>
<h1>Uploader</h1>
<p>Выбирете файл</p>
<form action="index.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="upload-file">
    <input type="submit" value="Отправить">
</form>
<p>Статус:</p>
<?php echo ($value->upload()) ? "Файл загружен" : "Файл не загружен"; ?>
</body>
</html>