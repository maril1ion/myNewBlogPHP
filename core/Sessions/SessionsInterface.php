<?php

namespace core\Sessions;

interface SessionsInterface
{
    public function setSession(string $key, $value);

    public function getSession(string $key, $default = null): mixed;

    public function getSessionFlash(string $key, $default = null): mixed;

    public function hasSession(string $key): bool;

    public function removeSession(string $key): void;

    public function destroySession(string $key): void;
}
