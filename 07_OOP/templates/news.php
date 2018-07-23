<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="/index.php">На главную</a>
<h1>Раздел новости</h1>



<!--перебор массива-->
<?php foreach ($data['news'] as $key => $value) { ?>
    <!--переход по ссылке с id-->
    <a href="/article.php?id=<?php echo $key;?>">
        <!--Вывод заголовка новости-->
        <?php echo $value->getArticle()['title'];?>
    </a>
    <p>
        <!--частичнаый вывод додержимого новости-->
        <?php echo mb_substr($value->getArticle()['text'], 0 , 100);?>...
    </p>
<?php } ?>

</body>
</html>