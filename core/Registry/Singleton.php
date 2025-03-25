<?php

namespace core\Registry;

/*
 * Класс Одиночка предоставляет метод `GetInstance`, который ведёт себя как
 * альтернативный конструктор и позволяет клиентам получать один и тот же
 * экземпляр класса при каждом вызове.
 */

use core\Config\ConfigDB;
use core\Config\ConfigDBInterface;
use core\Database\Database;
use core\Database\DatabaseInterface;
use core\Http\Request;
use core\Http\RequestInterface;
use core\Redirect\Redirect;
use core\Redirect\RedirectInterface;
use core\Router\Router;
use core\Sessions\Session;
use core\Sessions\SessionsInterface;
use core\Validator\Validate;
use core\Validator\ValidateInterface;
use core\View\View;
use core\View\ViewInterface;

trait Singleton
{
    /*
    * Объект одиночки храниться в статичном поле класса. Это поле — массив, так
    * как мы позволим нашему Одиночке иметь подклассы. Все элементы этого
    * массива будут экземплярами конкретных подклассов Одиночки
     */
    protected static ?self $instance = null;

    private ViewInterface $view;

    private RequestInterface $request;

    private ValidateInterface $validate;

    private RedirectInterface $redirect;

    private SessionsInterface $session;

    private ConfigDBInterface $config;

    private DatabaseInterface $database;

    private function __construct() {}

    /*
     * Это статический метод, управляющий доступом к экземпляру одиночки. При
     * первом запуске, он создаёт экземпляр одиночки и помещает его в
     * статическое поле. При последующих запусках, он возвращает клиенту объект,
     * хранящийся в статическом поле.
     *
     * Эта реализация позволяет вам расширять класс Одиночки, сохраняя повсюду
     * только один экземпляр каждого подкласса.
     */
    public static function getInstance(): static
    {
        return static::$instance ?? static::$instance = new static;
    }

    private function action()
    {
        $this->request = Request::getRequest();
        $this->validate = new Validate;
        $this->redirect = new Redirect;
        $this->session = new Session;
        $this->view = new View;
        $this->config = new ConfigDB;
        $this->database = new Database($this->config);
        $router = new Router(
            $this->view,
            $this->request,
            $this->validate,
            $this->redirect,
            $this->session,
            $this->database
        );
        $router->dispatch(Request::uri(), Request::method());

        // debug(Request::getRequest());
    }

    public function doAction(): void
    {
        Registry::set('instance', self::getInstance());

        Registry::get('instance')->action();
    }
}
