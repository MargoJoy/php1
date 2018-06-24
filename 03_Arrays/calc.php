<?php
include __DIR__ . '/funcCalc.php';
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
        img{
            max-width: 300px;
        }
        .gal, .calc{
            max-width: 650px;
            margin: 40px auto;
        }
    </style>
</head>
<body>
<div class="calc">
    <h3>Калькулятор</h3>

    <form action="" method="get">
        <label for="">
<!--Вывод введенных значений-->
            <input type="number" name="x" value="<?php echo $x; ?>">
        </label>
        <select name="arithmetic" id="">
            <option value="+"> + </option>
            <option value="-"> - </option>
            <option value="*"> * </option>
            <option value="/"> / </option>
        </select>
        <label for="">
<!--Вывод введенных значений-->
            <input type="number" name="y" value="<?php echo $y; ?>">
        </label>
        <label for="">
            <input type="submit" value="=">
        </label>
<!--Вывод результата-->
        <span> <?php echo $z; ?></span>
    </form>
</div>
</body>
</html>
