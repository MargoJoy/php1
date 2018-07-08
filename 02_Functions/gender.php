<?php

function gender($name)
{
//возвращает часть строки
    $genderString = mb_substr($name, - 1);
//переводит эту часть строки к нижнему регистру
    $genderName = mb_strtolower($genderString);
//если полученная часть строки совпадает с перечисленными то
    if ($genderName == 'а' || $genderName == 'я' || $genderName == 'ь') {
//вернет значение
        return 'Женский пол';
//если раньше не нашлось совпадений, то сравнить с другими
    } elseif ($genderName == 'л' || $genderName == 'р' || $genderName == 'й'||
        $genderName == 'н'|| $genderName == 'м' || $genderName == 'т' ||
        $genderName == 'с' || $genderName == 'в') {
//если совпало то вернется
        return 'Мужской пол';
//если снова не нашлось совпадений, то вернется null
    } else {
        return null;
    }
}

assert( gender( 'Александр' ) == 'Мужской пол' );
assert( gender( 'Елена' ) == 'Женский пол' );
assert( gender( 'Ц' ) == null );
?>


<h3>Пункт 4. Определение пола по имени человека </h3>
<p><?php echo $name = 'Александра'; ?></p>
<p><?php echo gender($name); ?></p>
