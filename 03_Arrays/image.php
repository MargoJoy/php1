<?php
include __DIR__ . '/imgArray.php';
//в переиенную полученное методом get значение
$photo = $_GET['id'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Массивы. Циклы. Взаимодействие с пользователем.</title>
    <style>
        .bigImg{
            width: 600px;
            margin: 40px auto;
        }
        img{
            max-width: 600px;
        }
    </style>
</head>
<body>
<div class="bigImg">
    <a href="index.php">На главную</a>
<!--вывод отдельного элемента массива, в качестве ключа, полученное get-ом значение-->
    <img src="img/<?php echo $image[$photo]; ?>" alt="">
</div>

</body>
</html>
