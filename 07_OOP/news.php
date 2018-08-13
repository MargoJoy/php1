<?php
require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/News.php';

$news = new News(__DIR__ . '/data/news.php');
$temp = __DIR__ . '/templates/news.php';

$view = new View();
$view->assign('news', $news->getData());
$view->display($temp);
