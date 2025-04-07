<?php

namespace core\Middleware;

interface MiddlewareInterface
{
    public function check(array $middleware = []);
}
