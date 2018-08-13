<?php


function getUsersList()
{
    $users = include __DIR__ . '/users.php';
    return $users;
}


function existsUser($login)
{

    foreach (getUsersList() as $key => $array ){
        if ($key == $login){
            return true;
        }
    }
    return false;
}


function checkPassword($login, $password)
{

    if (!empty(existsUser($login)) && existsUser($login) == true) {
        $access = password_verify($password, getUsersList()[$login]);

        if ($access == true){
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function getCurrentUser()
{
    if (existsUser($_SESSION['name']) == true) {
        if (!empty($_SESSION['name']) && isset($_SESSION['name'])) {
            $name = $_SESSION['name'];
            return $name;
        } else {
            return null;
        }
    }
    return null;
}
