<?php
require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/GuestBookRecord.php';
$temp = __DIR__ . '/templates/guestBook.php';

$gbook = new GuestBook(__DIR__ . '/data/text.txt');

$lines = $_POST['text'];

if (null !== $lines){
    $gbookrecord = new GuestBookRecord($lines);
    $gbook->append($gbookrecord)->save();
    header('Location: /guestBook.php');
}


$view = new View();
$view->assign('gBook', $gbook->getData());
$view->display($temp);

