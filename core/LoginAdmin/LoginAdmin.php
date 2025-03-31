<?php

namespace core\LoginAdmin;

use core\Config\ConfigDBInterface;
use core\Database\DatabaseInterface;
use core\Redirect\RedirectInterface;
use core\Sessions\SessionsInterface;

class LoginAdmin implements LoginAdminInterface
{
    public function __construct(private ConfigDBInterface $config, private DatabaseInterface $db, private SessionsInterface $session) {}

    public function login(string $login, string $password): bool
    {
        $admin = $this->db->first($this->getTable(), [$this->getName() => $login]);
        if (! $admin) {
            return false;
        }

        if (! password_verify($password, $admin[$this->getPassword()])) {
            return false;
        }
        $this->session->setSession('admin_id', $admin);

        return true;
    }

    public function check(): bool
    {
        return $this->session->hasSession('admin_id');
    }

    public function logout(): void
    {
        $this->session->removeSession('admin_id');
    }

    public function getTable(): string
    {
        return $this->config->get('admin.table');
    }

    public function getName(): string
    {
        return $this->config->get('admin.login');
    }

    public function getPassword(): string
    {
        return $this->config->get('admin.password');
    }
}
