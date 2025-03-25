<?php

namespace core;

use core\Registry\Singleton;

class App
{
    use Singleton;

    public static function run(): void
    {
        require_once dirname(__DIR__).'/config/init.php';
        require_once HELPERS;
        self::getInstance()->doAction();
    }
}
