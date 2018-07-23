<?php
session_start();
require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/Gallery.php';
require_once __DIR__ . '/classes/Image.php';
require_once __DIR__ . '/function.php';

$temp = __DIR__ . '/templates/index.php';

$dirGallery = __DIR__ .'/img';

$gallery = new Gallery($dirGallery);

$image = new Image($gallery);

$view = new View();
$view->assign('gallery', $gallery->show());
$view->display($temp);

