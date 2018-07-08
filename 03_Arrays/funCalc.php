<?php
//функция принимает 3 оператора (переменные в которых хранятся полученные значения)
function calc($x, $y, $oper)
{
//если значения равны null, или одно значение равно null возвращается просьба заполнить паля
    if ($x == null || $y == null || $oper == null) {
        return null;
//иначе начинаем проверять какие значения введены
    } else {
//проводит мат. операции, с поправкой / 0
        if ($oper == '+') {
            return  $x + $y;
        } elseif ($oper == '-'){
            return  $x - $y;
        } elseif ($oper == '*'){
            return  $x * $y;
        } elseif ($oper == '/'){
            if($x == 0 || $y == 0 ){
                return null;
            } else {
                return  $x / $y;
            }
        }
    }
}