<!DOCTYPE html>
<html>
<head>
    <title>Note</title>
</head>

<style>
    body {
        max-width: 980px;
        margin: 0 auto;
        padding: 0;
        outline: none;
        /*background-image: url("../../dist/img/background.jpg");*/
        background-position: bottom;
        font-family: Calibri;
    }
    h1{
        margin: 0 auto;
        margin-bottom: 20px;
        font-family: "Calibri Light";
    }
    a {
        outline: none;
        color: black;
        text-decoration: none;
    }

    header {
        margin: 0;
        padding: 0;
        background-color: #F8F8F8;
        box-shadow: 0px 2px 4px #545454;
    }

    header ul {
        margin: 0;
        padding: 0;
        display: table-row;
    }

    header ul li {
        list-style-type: none;
        display: inline-block;
        padding: 15px 0px;
        margin: 0;
    }
    header ul li a {
        padding: 15px 20px;
        margin: 0;
    }
    header ul li a:hover {
        background-color: #D7D7D7;
    }
    article {
        background-color: #F8F8F8;
        box-shadow: 0px 2px 4px #545454;
        /*border: 1px #3ED248 dotted;*/
        /*border-radius: 3px;*/
        margin: 15px 0;
        padding: 10px;
    }
</style>

<body>

<header>
    <ul>
        <li><a href="site.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="guestbook.php">Guestbook</a></li>
        <li><a href="uploader.php">Uploader</a></li>
    </ul>
</header>


<article>
    <h1>Article #<?= $article->getId(); ?></h1>
    <?= $article->getArticle($article->getId()); ?>
</article>

</body>
</html>