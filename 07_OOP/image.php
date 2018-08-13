<?php
require_once __DIR__ . '/classes/View.php';
$temp = __DIR__ . '/templates/image.php';

$view = new View();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $photoId = $_GET['id'];
    $view->assign('image', $photoId);
} else {
    header('Location: /index.php');
}

$view->display($temp);