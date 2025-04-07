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
        $loginAdmin = $this->getInputName('adminLogin');
        $password = $this->getInputName('adminPassword');
        $login = $this->login()->login($loginAdmin, $password);
        if (! $login) {

            $this->session()->setSession('loginFalse', '<div class = "border-2 border-[#b11e4d] rounded-full flex items-center justify-center p-3 w-10  h-10"><span class = "font-bold">ℹ</span></div> Ошибка! Данные введены неверно!');
            $this->redirect('/blog/login');
        }
        $this->redirect('/blog/home');
    }

    public function logout()
    {
        $this->login()->logout();
        $this->redirect('/blog/login');
    }
}
