<?php
include __DIR__ . '/../classes/GuestBook.php';

$guestbook = new GuestBook(__DIR__ . '/text.txt');


$lines = $_POST['text'];
if (isset($lines)){
    $guestbook->append($lines)->save();
    header('Location: /gbook/guestbook.php');
}