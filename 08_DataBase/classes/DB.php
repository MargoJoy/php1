<?php
class DB
{
    protected $dbh;
    //public $data = [];

    public function __construct()
    {
        //подключение к файлу с данными от гостевой книги (имя, пользователь, пароль
        $config = include __DIR__ . '/../data/config.php';
        //специальный класс, в котором прописана информация из ранее подключенного файла
        $this->dbh = new PDO($config['dsn'], $config['user'], $config['password']);
    }
    
//Метод execute(string $sql) выполняет запрос и возвращает true либо false в зависимости от того, удалось ли выполнение

    public function execute(string $sql)
    {
        //подготовка к запросу, передается сам запрос в виде строки
        $sth = $this->dbh->prepare($sql);
        //выполняется запрос
        return $sth->execute();
    }

//Метод query(string $sql, array $data) выполняет запрос, подставляет в него данные $data, возвращает данные результата запроса либо false, если выполнение не удалось

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






