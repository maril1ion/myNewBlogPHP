<?php

namespace core\Controller;

use core\Database\DatabaseInterface;
use core\Http\Request;
use core\Http\RequestInterface;
use core\LoginAdmin\LoginAdminInterface;
use core\Redirect\Redirect;
use core\Redirect\RedirectInterface;
use core\Sessions\Session;
use core\Sessions\SessionsInterface;
use core\Validator\ValidateInterface;
use core\View\View;
use core\View\ViewInterface;

abstract class Controller
{
    private ViewInterface $view;

    private RequestInterface $request;

    private ValidateInterface $validate;

    private SessionsInterface $session;

    private DatabaseInterface $database;

    private LoginAdminInterface $loginAdmin;

    // VIEW ****
    public function view(
        string $namePage,
        $nameTitle = 'Мой личный блог',
        string $nameLayouts = 'default'
    ) {
        echo $this->view->page($namePage, $nameTitle, $nameLayouts);
    }

    public function setView(ViewInterface $view): void
    {
        $this->view = $view;
    }

    // REQUEST ****
    public function request(): RequestInterface
    {
        return $this->request;
    }

    public function setRequest(RequestInterface $request): void
    {
        $this->request = $request;
    }

    // GET REQUEST NAME
    public function getInputName(string $name)
    {
        return $this->request::post($name);
    }

    // VALIDATOR ****

    public function setValidationErorrs()
    {
        foreach ($this->validate->errors() as $error) {
            return $this->session()->setSession('errors', $error);
        }
    }

    public function validate(string $name, array $keyValidation)
    {
        $dataName = $this->getInputName($name);
        //        $dataName = $this->request::post($name);
        $data = [$name => $dataName];
        $key = [$name => $keyValidation];

        return $this->validate->validate($data, $key);
    }

    public function validateErrors()
    {
        if (DEV == '1') {
            return [empty($this->validate->errors()) ? 'Ошибок нет' : 'Ошибки включены', $this->validate->errors()];
        } else {
            return 'Показ ошибок отключен';
        }
    }

    public function setValidator(ValidateInterface $validate): void
    {
        $this->validate = $validate;
    }

    // REDIRECT ****
    public function redirect($url)
    {
        return $this->redirect->to($url);
    }

    public function setReditect(RedirectInterface $redirect)
    {
        $this->redirect = $redirect;
    }

    // SESSION ****
    public function session()
    {
        return $this->session;
    }

    public function setSessionClass(SessionsInterface $session)
    {
        $this->session = $session;
    }

    // DATABASE ****
    public function db()
    {
        return $this->database;
    }

    public function setDB(DatabaseInterface $database)
    {
        $this->database = $database;
    }

    // AUTH ****
    public function login()
    {
        return $this->loginAdmin;
    }

    public function setLogin(LoginAdminInterface $loginAdmin)
    {
        $this->loginAdmin = $loginAdmin;
    }
}
