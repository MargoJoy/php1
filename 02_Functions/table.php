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

<h3>Пункт 1. Таблица истинности </h3>
<table border="1" cellpadding="5">
    <tr>
        <td> $a  ,  $b </td>
        <td> $a && $b </td>
        <td> $a || $b </td>
        <td> $a XOR $b </td>
    </tr>
    <tr>
        <td><?php echo $a = 1, ' , ' , $b = 1; ?></td>
        <td><?php echo bool_and( $a , $b ); ?></td>
        <td><?php echo bool_or( $a , $b ); ?></td>
        <td><?php echo bool_xor( $a , $b ); ?></td>
    </tr>
    <tr>
        <td><?php echo $a = 0, ' , ' , $b = 1; ?></td>
        <td><?php echo bool_and( $a , $b ); ?></td>
        <td><?php echo bool_or( $a , $b ); ?></td>
        <td><?php echo bool_xor( $a , $b ); ?></td>
    </tr>
    <tr>
        <td><?php echo $a = 1, ' , ' , $b = 0; ?></td>
        <td><?php echo bool_and( $a , $b ); ?></td>
        <td><?php echo bool_or( $a , $b ); ?></td>
        <td><?php echo bool_xor( $a , $b ); ?></td>
    </tr>
    <tr>
        <td><?php echo $a = 0, ' , ' , $b = 0;?></td>
        <td><?php echo bool_and( $a , $b ); ?></td>
        <td><?php echo bool_or( $a , $b ); ?></td>
        <td><?php echo bool_xor( $a , $b ); ?></td>
    </tr>
</table>
</body>
</html>