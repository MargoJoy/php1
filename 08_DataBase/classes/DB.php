<?php
class DB
{
    protected $dbh;

    public function __construct()
    {
//подключение к файлу с данными от гостевой книги (имя, пользователь, пароль
        $config = include __DIR__ . '/../data/config.php';
//специальный класс, в котором прописана информация из ранее подключенного файла
        $this->dbh = new PDO($config['dsn'], $config['user'], $config['password']);
    }

    public function execute(string $sql)
    {
//подготовка к запросу, передается сам запрос в виде строки
        $sth = $this->dbh->prepare($sql);
 //выполняется запрос
        return $sth->execute();
    }

    public function query(string $sql, array $data = [])
    {

        $sth = $this->dbh->prepare($sql);
        if ($sth->execute($data)) {
            $data = $sth->fetchAll();
            return $data;
        } else {
            return false;
        }
    }
    

}






