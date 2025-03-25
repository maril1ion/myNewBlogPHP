<?php

namespace core\Registry;

class Registry implements RegistryInterface
{
    //    use Singleton;
    public static array $property = [];

    public static function set(string $key, $value): void
    {
        self::$property[$key] = $value;
    }

    public static function get($key, $default = null)
    {
        return (isset(self::$property[$key])) ? self::$property[$key] : $default;
    }

    public static function getAll()
    {
        return self::$property;
    }
}
