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
<h1>Это шаблон</h1>

<?php foreach ($data['news'] as $value) {?>
    <a href="/article.php?id=<?php echo $value->getArticle()['id'];?>"><?php echo $value->getArticle()['tittle'];?></a>
    <p><?php echo mb_substr($value->getArticle()['text'], 0, 100) . '...' ;?></p>
    <P><?php echo $value->getArticle()['author']; ?></P>
    <hr>
<?php } ?>


</body>
</html>