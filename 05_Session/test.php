<?php
$arrays = [
    'Line1' => 'Cont1',
    'Line2' => 'Cont2',
];

var_dump($arrays);

foreach ($arrays as $key => $array ){
    if ($key == 'Line1' || $key == 'Line3'){
        echo 'good';
    } else {
        echo 'shit';
    }
}