<?php

namespace app\Controllers;

use core\Controller\Controller;
use function core\Controller\redirect;

class LoginAdminController extends Controller
{
    public function index()
    {
        $this->view('adminLogin');
    }

    public function loginAdmin()
    {
        $login = $this->getInputName('adminLogin');
        $password = $this->getInputName('adminPassword');
        $login = $this->login()->login($login, $password);
        if (!$login) {
            $this->redirect('/login');
        }
        $this->redirect('/home');
    }

    public function logout()
    {

        $this->login()->logout();
        $this->redirect("/login");
    }
}
