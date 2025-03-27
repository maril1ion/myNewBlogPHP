<?php

namespace app\Controllers;

use core\Controller\Controller;

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
        $this->redirect('/home');
    }
}
