<?php
require __DIR__ . '/classes/View.php';
require __DIR__ . '/classes/News.php';
$temp = __DIR__ . '/templates/article.php';
$view = new View();
$news = new News();

if (isset($_GET['id'])) {
    $id  = $_GET['id'];
    $article = $news->getData()[$id];

    $view->assign('oneArticle', $article);
} else {
    header('Location: /index.php');
}

$view->display($temp);