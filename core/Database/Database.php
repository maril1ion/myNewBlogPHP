<?php

namespace core\Database;

use core\Config\ConfigDBInterface;
use PDO;

class Database implements DatabaseInterface
{
    private \PDO $pdo;

    public function __construct(private ConfigDBInterface $config)
    {
        $this->connect();
    }

    public function connect()
    {
        $driver = $this->config->get('database.driver');
        $host = $this->config->get('database.host');
        $port = $this->config->get('database.port');
        $dbname = $this->config->get('database.dbname');
        $charset = $this->config->get('database.charset');
        $login = $this->config->get('database.login');
        $password = $this->config->get('database.password');
        try {
            $this->pdo = new PDO("$driver:host=$host;port=$port;dbname=$dbname;charset=$charset", "$login", "$password");
        } catch (\PDOException $e) {
            dd($e->getMessage());
        }
    }

    // первый аргумент: название таблицы
    // второй аргумент: ['название колонки' => 'значение из инпута, которое необходимо занести']
    public function insert(string $tableName, array $valueInputName)
    {
        $fields = array_keys($valueInputName);
        // получаем колонки
        $columns = implode(',', $fields);
        // получаем колонки с :
        $binds = implode(',', array_map(fn ($field) => ":$field", $fields));
        $sql = "INSERT INTO $tableName ($columns) VALUES ($binds)";
        $stmt = $this->pdo->prepare($sql);
        try {
            $stmt->execute($valueInputName);
        } catch (\PDOException $e) {
            dump($e->getMessage());

            return false;
        }

        return (int) $this->pdo->lastInsertId();
    }
}
