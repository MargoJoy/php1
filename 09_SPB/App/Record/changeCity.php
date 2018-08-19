<?php
require __DIR__ . '/../../autoload.php';

if ((isset($_POST['changeCity'])) && (!empty($_POST['changeCity']))) {
    $cityRec = new \App\Model\city\City(__DIR__ . '/../data/cityText.txt');
    $cityRec->upCity($_POST['changeCity']);

    header('Location: /../App/Controller/admin.php');
} else {
    header('Location: /../App/Controller/admin.php');
    return null;
}