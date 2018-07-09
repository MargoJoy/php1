<?php
/*
//проверка пвроля и хеша
$password1 = '123';
echo password_hash($password1, PASSWORD_DEFAULT);

$password2 = '456';
echo password_hash($password2, PASSWORD_DEFAULT);

var_dump(
    password_verify('123', '$2y$10$NKkJhqSKOc8JYIV8jsdtYecW9igwS1TaGfZU984YJ7qcMSqgF8fw6')
);
var_dump(
    password_verify('456', '$2y$10$5we0/EdrsHTCyu2Xy1j0Hupe5R3ndK2rA9PGBQMarS53iXtP8w1Pq')
);*/

//возвращает массив всех пользователей и хэшей их паролей
function getUsersList()
{
    $path = include __DIR__ . '/users.php';
    return $path;
}

//проверяет - существует ли пользователь с заданным логином
function existsUser($login)
{
//Проверяет, присутствует ли в массиве указанный ключ или индекс
    $user = array_key_exists($login, getUsersList());
    return $user;
}

//возвращает true, когда существует пользователь с указанным логином и введенный им пароль прошел проверку
function checkPassword($login, $password)
{
    $access = password_verify($password, getUsersList()[$login]);

    if ((existsUser($login) == true) && $access == true) {
       return true;
    } else {
        return false;
    }
}

//возвращает либо имя вошедшего на сайт пользователя, либо null
function getCurrentUser()
{
    if (isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
        return $name;
    } else {
        return null;
    }
}
