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
<a href="/index.php">Ввсе новости</a>
<h3><?php echo  $data['oneArticle']->title; ?></h3>
<p><?php echo  $data['oneArticle']->text; ?></p>


</body>
</html>