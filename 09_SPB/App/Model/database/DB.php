<?php
namespace App\Model\database;


class DB
{
    protected $dbh;

    public function __construct()
    {
        $config = include __DIR__ . '/../../data/config.php';
        $this->dbh = new \PDO($config['dsn'], $config['user'], $config['password']);
    }

    public function execute(string $sql)
    {
        $sth = $this->dbh->prepare($sql);
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

