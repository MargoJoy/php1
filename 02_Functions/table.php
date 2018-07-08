<?php
//функция bool_and принимает 2 аргумента
function bool_and($a, $b)
{
    // если оба аргумента равни 1 true, иначе false
    if ($a  && $b) {
        $res = 1;
    } else {
        $res = 0;
    }
    //возвращается значение
    return $res;
}

function bool_or($a, $b)
{
    if ($a || $b) {
        $res = 1;
    } else {
        $res = 0;
    }
    return $res;
}

function bool_xor($a, $b)
{
    if ($a xor $b) {
        $res = 1;
    } else {
        $res = 0;
    }
    return $res;
}
?>


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
