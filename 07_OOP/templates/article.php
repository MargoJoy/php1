<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Статья</title>
</head>
<body>

<a href="/news.php">Все новости</a>

<h3><?php echo $data['article']->title;?></h3>
<p><?php echo $data['article']->text;?></p>

</body>
</html>
