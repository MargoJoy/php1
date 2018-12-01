<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новости</title>
</head>
<body>
<h3>Новости</h3>
<a href="/index.php">На главную</a>

<?php foreach ($data['news'] as $id => $article){ ?>
    <h4><a href="/article.php?id=<?php echo $id; ?>"><?php echo $article->title; ?></a></h4>
    <p><?php echo $article->text; ?></p>
<?php }; ?>

</body>
</html>
