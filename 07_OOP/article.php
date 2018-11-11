<?php
require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/News.php';

$temlpate = __DIR__ . '/templates/article.php';
$dataNews = __DIR__ . '/data/news.php';
$news = new News($dataNews);

$view = new View();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $article = $news->getData()[$id];
    $view->assign('article', $article);
} else {
    header('Location: /index.php');
}

$view->display($temlpate);
