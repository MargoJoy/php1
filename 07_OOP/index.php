<?php
session_start();
require_once  __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/Gallery.php';

if (isset( $_GET['do'] )&& $_GET['do'] == 'exit' ) {
    unset($_SESSION['name']);
}

$template = __DIR__ . '/templates/gallery.php';
$gallery = new Gallery(__DIR__ . '/images');

$view = new View();
$view->assign('gallery', $gallery->getData());
$view->display($template);