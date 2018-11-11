<?php
require_once __DIR__ . '/classes/View.php';
$template = __DIR__ . '/templates/image.php';

$view = new View();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $imgId = $_GET['id'];
    $view->assign('image', $imgId);
} else {
    header('Location: /index.php');
}

$view->display($template);