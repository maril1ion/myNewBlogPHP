<?php

namespace core\Router;

interface RouterInterface
{
    public function dispatch(string $uri, string $method);

    public function initRoutes();
}
