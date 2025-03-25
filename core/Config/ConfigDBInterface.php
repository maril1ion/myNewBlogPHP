<?php

namespace core\Config;

interface ConfigDBInterface
{
    public function get(string $key): mixed;
}
