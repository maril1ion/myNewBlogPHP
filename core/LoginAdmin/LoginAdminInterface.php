<?php

namespace core\LoginAdmin;

interface LoginAdminInterface
{
    public function login(string $login, string $password): bool;

    public function logout(): void;

    public function getTable(): string;

    public function getName(): string;

    public function getPassword(): string;

    public function checkLogin();

    public function check(): bool;
}
