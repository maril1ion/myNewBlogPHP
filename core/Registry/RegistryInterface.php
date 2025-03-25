<?php

namespace core\Registry;

interface RegistryInterface
{
    public static function set(string $key, $value): void;

    public static function get($key, $default = null);

    public static function getAll();
}
