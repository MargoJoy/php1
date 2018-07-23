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
<a href="/news.php">Все новости</a>

<?php foreach ($data['oneArticle']->getArticle() as $value){?>
    <p><?php echo $value;?></p>
<?php }?>


</body>
</html>