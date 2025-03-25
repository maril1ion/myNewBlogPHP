<?php

namespace core\Router;

use core\Controller\Controller;
use core\Database\DatabaseInterface;
use core\Http\RequestInterface;
use core\Redirect\RedirectInterface;
use core\Sessions\SessionsInterface;
use core\Validator\ValidateInterface;
use core\View\ViewInterface;

class Router implements RouterInterface
{
    private array $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function __construct(
        private ViewInterface $view,
        private RequestInterface $request,
        private ValidateInterface $validate,
        private RedirectInterface $redirect,
        private SessionsInterface $session,
        private DatabaseInterface $database
    ) {
        $this->initRoutes();
    }

    public function dispatch(string $uri, string $method)
    {
        // В массивы GET и POST записываем соответствующие методы получаем в массивах 'GET' и 'POST' и извлекаем из этих массивов в классе dispatch
        $route = $this->findRoutes($uri, $method);
        if (! $route) {
            $this->notFound();
        }
        if (is_array($route->getAction())) {
            [$controller, $action] = $route->getAction();
            // $controller =$route->getAction()[0];
            // $action =$route->getAction()[1];
            /**
             * @var Controller $controller
             */
            $controller = new $controller;
            call_user_func([$controller, 'setView'], $this->view);
            call_user_func([$controller, 'setRequest'], $this->request);
            call_user_func([$controller, 'setValidator'], $this->validate);
            call_user_func([$controller, 'setReditect'], $this->redirect);
            call_user_func([$controller, 'setSessionClass'], $this->session);
            call_user_func([$controller, 'setDB'], $this->database);

            call_user_func([$controller, $action]);
            //            $controller = new $action();
        } else {
            $route->getAction()();
        }
    }

    public function initRoutes()
    {
        $routes = $this->getRoutes();
        foreach ($routes as $route) {
            // В массивы GET и POST записываем соответствующие методы получаем в массивах 'GET' и 'POST' и извлекаем из этих массивов в классе dispatch
            $this->routes[$route->getMethod()][$route->getUri()] = $route;
        }
    }

    /**
     * @return Route[]
     */
    private function findRoutes(string $uri, string $method): Route|false
    {
        if (! isset($this->routes[$method][$uri])) {
            return false;
        }

        return $this->routes[$method][$uri];
    }

    private function notFound()
    {
        echo '<h1>NOT FOUND | 404</h1>';
        exit;
    }

    private function getRoutes()
    {
        return require_once CONFIG.'/routes.php';
    }
}
