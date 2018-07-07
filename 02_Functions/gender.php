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
<h3>Пункт 4. Определение пола по имени человека </h3>
<p><?php echo $name = 'Александра'; ?></p>
<p><?php echo gender($name); ?></p>
</body>
</html>