<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="/index.php">Главная</a><br>
<?php foreach ($data['news'] as $id => $article){ ?>
    <a href="/article.php?id=<?php echo $id; ?>">
        <?php echo $article->title; ?>
    </a>
    <p><?php echo $article->text; ?></p>
<?php } ?>

</body>
</html>