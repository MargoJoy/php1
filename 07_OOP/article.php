<?php
require __DIR__ . '/classes/View.php';
require __DIR__ . '/classes/News.php';
$temp = __DIR__ . '/templates/article.php';

$view = new View();
$news = new News(__DIR__ . '/data/news.php');

//var_dump($news);

if (isset($_GET['id'])) {
    $id  = $_GET['id'];

    $view->assign('oneArticle', $news->getData()[$id]);
} else {
    echo 'Новость не найдена';
    //header('Location: /index.php');
}


$view->display($temp);