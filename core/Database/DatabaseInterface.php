<?php

namespace core\Database;

interface DatabaseInterface
{
    public function connect();

    public function insert(string $tableName, array $valueInputName);

    public function first(string $table, array $cond = []);

    public function passwordHash(string $table, $password);
}
