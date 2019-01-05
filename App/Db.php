<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = (include __DIR__ . '/../config.php')['db'];
        $this->dbh = new \PDO('mysql:host=' .$config['host'] . ';dbname=' .$config['dbname'],$config['user'],$config['password']);

    }

    public function query($sql, $data = [], $class)
    {
        $sht = $this->dbh->prepare($sql); // подготовка запроса
        $sht->execute($data); // выполнили
        return $sht->fetchAll(\PDO::FETCH_CLASS, $class); // обьекты возвращаем
    }
}