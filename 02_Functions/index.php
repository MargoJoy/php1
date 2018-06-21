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
    <style>
        h3{
            text-align: center;
        }
        table{
            border-spacing: 0;
            border: 1px solid grey;
        }
        td{
            height:30px ;
            min-width: 100px;
            text-align: center;
            border: 1px solid grey;
        }
        .title, u{
            background: lightskyblue;
            font-weight: bold;
        }
        div{
            max-width: 420px;
            margin: 0 auto;
        }

    </style>
</head>
<body>
<div>
    <h3>Пункт 1. Таблица истинности </h3>
    <table>
        <tr class="title">
            <td> $a | $b </td>
            <td> $a && $b </td>
            <td> $a || $b </td>
            <td> $a XOR $b </td>
        </tr>
        <tr>
            <td><?php echo $a = 1, ' | ' , $b = 1; ?></td>
            <td><?php echo bool_and( $a , $b ); ?></td>
            <td><?php echo bool_or( $a , $b ); ?></td>
            <td><?php echo bool_xor( $a , $b ); ?></td>
        </tr>
        <tr>
            <td><?php echo $a = 0, ' | ' , $b = 1; ?></td>
            <td><?php echo bool_and( $a , $b ); ?></td>
            <td><?php echo bool_or( $a , $b ); ?></td>
            <td><?php echo bool_xor( $a , $b ); ?></td>
        </tr>
        <tr>
            <td><?php echo $a = 1, ' | ' , $b = 0; ?></td>
            <td><?php echo bool_and( $a , $b ); ?></td>
            <td><?php echo bool_or( $a , $b ); ?></td>
            <td><?php echo bool_xor( $a , $b ); ?></td>
        </tr>
        <tr>
            <td><?php echo $a = 0, ' | ' , $b = 0;?></td>
            <td><?php echo bool_and( $a , $b ); ?></td>
            <td><?php echo bool_or( $a , $b ); ?></td>
            <td><?php echo bool_xor( $a , $b ); ?></td>
        </tr>
    </table>
</div>

<div>
    <h3>Пункт 2.  Корень квадратного уравнения </h3>

    <p>Дискриминант = <?php echo $discr; ?> </p>
    <p><?php echo $res; ?> </p>
    <p><?php echo $x1; ?> </p>
    <p><?php echo $x2; ?> </p>
</div>

<div>
    <h3>Пункт 3.  Изучение Include в виде функции </h3>

    <p><?php var_dump($inc); ?></p>
    <p><?php var_dump($incTest) ;?></p>
    <p><?php echo $inc; ?></p>
</div>

<div>
    <h3>Пункт 4. Определение пола по имени человека </h3>
    <p><?php echo $name = 'Александра'; ?></p>
    <p><?php echo gender($name); ?></p>
</div>

</body>
</html>
