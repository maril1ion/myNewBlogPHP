<?php

namespace core\Config;

class ConfigDB implements ConfigDBInterface
{
    public function get(string $key, $default = null): mixed
    {
        [$file, $key] = explode('.', $key);
        $configPath = CONFIG."/$file.php";
        if (! file_exists($configPath)) {
            return $default;
        }
        $config = require $configPath;

        return $config[$key] ?? $default;
    }
}
