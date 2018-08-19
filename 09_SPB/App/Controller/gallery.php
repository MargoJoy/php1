<?php
require __DIR__ . '/../../autoload.php';

$template = __DIR__ . '/../View/templates/gallery.php';
$view = new \App\View\classes\View();

$gallery = new \App\Model\gallery\Gallery();

$view->assign('allImages', $gallery->getImages());
$view->display($template);