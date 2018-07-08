<?php
include __DIR__ . '/funCalc.php';

//если были установлены переменные
if (isset($_GET['x']) || isset($_GET['y']) || isset($_GET['arithmetic'])) {
//то присваиваем их значение новым переменным для дальнейшей работы
    $x = $_GET['x'];
    $y = $_GET['y'];
    $oper = $_GET['arithmetic'];
//иначе присваиваем переменным значение null
} else {
    $x = null;
    $y = null;
    $oper = null;
}

//вывод получившегося значения
$z = calc($x, $y, $oper);

?>
<h3>Калькулятор</h3>

<form action="/calc.php" method="get">
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

