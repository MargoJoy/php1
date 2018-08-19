<?php
require __DIR__ . '/../../autoload.php';

$template = __DIR__ . '/../View/templates/image.php';
$view = new \App\View\classes\View();

$gallery = new \App\Model\gallery\Gallery();

$id = $_GET['id'];

if (isset($id) && !empty($id)) {
    $view->assign('idImages', $gallery->getImage($id));
}

$view->display($template);