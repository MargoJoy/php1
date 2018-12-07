<?php
/*
 Создайте класс DB
1. В конструкторе устанавливается и сохраняется соединение с базой данных. Параметры соединения берем из файла конфига
2. Метод execute(string $sql) выполняет запрос и возвращает true либо false в зависимости от того, удалось ли выполнение
3. Метод query(string $sql, array $data) выполняет запрос, подставляет в него данные $data, возвращает данные результата запроса либо false, если выполнение не удалось
 * */

class DB
{
//В конструкторе устанавливается и сохраняется соединение с базой данных.
// Параметры соединения берем из файла конфига

    protected $dbh;

    public function __construct()
    {
        $config = include __DIR__ . '/../data/config.php';
        $this->dbh = new PDO($config['dsn'], $config['user'], $config['password']);
    }

//Метод execute(string $sql) выполняет запрос и возвращает true либо false в зависимости от того, удалось ли выполнение

    public function execute(string $sql)
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute();

    }

//Метод query(string $sql, array $data) выполняет запрос, подставляет в него данные $data, возвращает данные результата запроса либо false, если выполнение не удалось

    public function query(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        if ($sth->execute($data)) {
            return $sth->fetchAll();

        } else {
            return false;
        }

    }

}

//$database = new DB();
//
//var_dump($database->query('SELECT * FROM news'));
//подстановки!!!!!!!!!!!!
//var_dump($database->query('SELECT * FROM news WHERE id=:id', [':id' => $_GET['id']]));