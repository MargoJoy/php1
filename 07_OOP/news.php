<?php
require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/News.php';

$temlpate = __DIR__ . '/templates/news.php';
$dataNews = __DIR__ . '/data/news.php';
$news = new News($dataNews);


$view = new View();
$view->assign('news', $news->getData());
$view->display($temlpate);