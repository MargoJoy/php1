<?php
session_start();
include __DIR__ . '/functions.php';
$type = include __DIR__ . '/upType.php';

$userName = getCurrentUser();
$date = date('c');
$fileName = $_FILES['newImg']['name'];
$log = $userName . ' | ' .  $date . ' | ' . $fileName . ' | ' . "\n";
$logPath = __DIR__ . '/log.txt';


if (isset($_FILES['newImg'])){

    if (0 == $_FILES['newImg']['error'] && in_array($_FILES['newImg']['type'], $type) && isset($userName)){
        $name = $_FILES['newImg']['name'];
        move_uploaded_file(
            $_FILES['newImg']['tmp_name'],
            __DIR__. '/images/' . $name
        );
        file_put_contents($logPath, $log, FILE_APPEND);
    }

    header('Location: /index.php');
}



