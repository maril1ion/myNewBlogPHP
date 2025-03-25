<?php

namespace core\Sessions;

class Session implements SessionsInterface
{
    public function __construct()
    {
        session_start();
    }

    public function setSession(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function getSession(string $key, $default = null): mixed
    {
        return $_SESSION[$key] ?? $default;
    }

    public function getSessionFlash(string $key, $default = null): mixed
    {
        $value = $this->getSession($key, $default);
        $this->removeSession($key);

        return $value;
    }

    public function hasSession(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    public function removeSession(string $key): void
    {
        unset($_SESSION[$key]);
    }

    public function destroySession(string $key): void
    {
        session_destroy();
    }
}
