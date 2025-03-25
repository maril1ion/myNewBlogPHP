<?php

namespace core\Http;

interface RequestInterface
{
    public static function getRequest(): static;

    public static function uri();

    public static function method();

    public static function get($name);

    public static function post($name);

    public static function methodValidate(string $name, $default = null);
}
