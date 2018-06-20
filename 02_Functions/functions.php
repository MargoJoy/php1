<?php

//==========1==========

//функция bool_and принимает 2 аргумента
function bool_and( $a, $b )
{
    // если оба аргумента равни 1 true, иначе false
    if ( $a  && $b ) {
        $res = 'true';
    } else {
        $res = 'false';
    }
    //возвращается значение
    return $res;
}

function bool_or( $a, $b )
{
    if ( $a || $b ) {
        $res = 'true';
    } else {
        $res = 'false';
    }
    return $res;
}

function bool_xor( $a, $b )
{
    if ( $a xor $b ) {
        $res = 'true';
    } else {
        $res = 'false';
    }
    return $res;
}

//==========2==========
$a = 5;
$b = 9;
$c = 3;

//вычисление дискриминанта
function dis( $a, $b, $c )
{
//формула
    $d = $b * $b - 4 * $a * $c;
    return $d;
}

//для вывода, иначе путается с табличкой))
$discr =  dis( $a, $b, $c );

assert(dis(5, 9, 3) == 21);
assert(dis(9, 5, 3) == -83);
assert(dis(3, 6, 3) == 0);

//корень из дискриминанта
$D = sqrt( dis( $a, $b, $c ) );

//если дискриминант меньше нуля, корней нет
if ( dis( $a, $b, $c ) < 0 ) {
     $res = 'Корней нет!';
//если дискриминант больше нуля, корней 2
} elseif ( dis( $a, $b, $c ) > 0 )
{
//вычисление корней
    $x1 = ( -1 * $b - $D ) / ( 2 * $a );
    $x2 = ( -1 * $b + $D ) / ( 2 * $a );
//кол-во корней
    $res = 'Корней 2';
//если дискриминант равен нулю, корень один
} elseif ( dis( $a, $b, $c ) == 0 )
{
//вычисление корня
    $x1 = ( -1 * $b ) / ( 2 * $a );
    $res = 'Корень 1';
}

//==========3==========

/*
Оператор include, если его использовать как функцию возвращает int 1 если файл существует,
и boolean false если файл не найден, если в файле использовать конструкцию return то вернет
значение полученное от return.
*/

$inc = include __DIR__ . '/include.php';
//$incTest = include __DIR__ . '/includeTest.php';


//==========4==========

function gender($name){
//возвращает часть строки
    $genderString = mb_substr($name, - 1);
//переводит эту часть строки к нижнему регистру
    $genderName = mb_strtolower($genderString);
//если полученная часть строки совпадает с перечисленными то
    if( $genderName == 'а' || $genderName == 'я' || $genderName == 'ь' )
    {
//вернет значение
        return 'Женский пол';
//если раньше не нашлось совпадений, то сравнить с другими
    } elseif ($genderName == 'л' || $genderName == 'р' || $genderName == 'й'||
        $genderName == 'н'|| $genderName == 'м' || $genderName == 'т' ||
        $genderName == 'с' || $genderName == 'в')
    {
//если совпало то вернется
        return 'Мужской пол';
//если снова не нашлось совпадений, то вернется null
    } else {
        return null;
    }
}

assert(gender('Александр') == 'Мужской пол');
assert(gender('Елена') == 'Женский пол');
assert(gender('Ц') == null);




















