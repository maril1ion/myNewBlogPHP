<?php

namespace core\Http;

class Request implements RequestInterface
{
    public function __construct(
        public readonly array $get,
        public readonly array $post,
        public readonly array $server,
        public readonly array $files,
        public readonly array $cookies,
    ) {}

    public static function getRequest(): static
    {
        return new static($_GET, $_POST, $_SERVER, $_FILES, $_COOKIE);
    }

    public static function uri()
    {
        return strtok(rtrim($_SERVER['REQUEST_URI'], '/'), '?');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function get($name)
    {
        return $_GET[$name] ?? null;
    }

    public static function post($name)
    {
        return $_POST[$name] ?? null;
    }

    public static function methodValidate(string $name, $default = null)
    {
        if ($_POST[$name] ?? null) {
            return ' + POST: '.self::post($name).' + ' ?? $default.'+';
        } elseif ($_GET[$name] ?? null) {
            return ' + GET: '.self::get($name).' + ' ?? $default.'+';
        } else {
            return $default;
        }
    }
}
