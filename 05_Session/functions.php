<?php
session_start();

function getUsersList(){
    $users = include __DIR__ . '/users.php';
    return $users;
}

function existsUser($login){
    if (isset(getUsersList()[$login])){
        return true;
    } else {
        return false;
    }
}

function checkPassword($login, $password){

    if(existsUser($login) && password_verify($password, getUsersList()[$login] )){
        return true;
    } else {
        return false;
    }
}

function getCurrentUser() {
    if (!empty($_SESSION['name']) && existsUser($_SESSION['name'] )){
        return $_SESSION['name'];
    } else {
        return null;
    }
}
