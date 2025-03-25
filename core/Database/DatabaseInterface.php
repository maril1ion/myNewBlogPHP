<?php

namespace core\Database;

interface DatabaseInterface
{
    public function connect();

    public function insert(string $tableName, array $valueInputName);
}
