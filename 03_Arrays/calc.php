<?php
include __DIR__ . '/funcCalc.php';
?>

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
