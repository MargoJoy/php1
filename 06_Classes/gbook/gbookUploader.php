<?php
session_start();
include __DIR__ . '/../functions.php';
include __DIR__ . '/../classes/GuestBook.php';

$guestbook = new GuestBook(__DIR__ . '/text.txt');
$line = $_POST['text'];
$userName = getCurrentUser();

if (isset($line) && isset($userName)) {
    $guestbook->append($line)->save();
}
header('Location: /gbook/guestbook.php');