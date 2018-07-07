<?php
include __DIR__ . '/functions.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Функции. Операторы контроля. Включение файлов</title>
</head>
<body>

<h3>Пункт 3.  Изучение Include в виде функции </h3>

<p><?php var_dump($inc); ?></p>
<p><?php var_dump($includeNull);?></p>
<p><?php echo $inc; ?></p>
<p>
    Оператор include, если его использовать как функцию возвращает int 1 если файл существует,
    и boolean false если файл не найден, если в подключаемом файле использовать конструкцию return то вернет
    значение полученное от return (string 'hello world' (length=11)).
</p>
</body>
</html>