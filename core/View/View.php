<?php

namespace core\View;

use core\Http\RequestInterface;
use core\LoginAdmin\LoginAdminInterface;
use core\Sessions\SessionsInterface;

// use core\Sessions\Session;

class View implements ViewInterface
{
    public function __construct(private SessionsInterface $session, private LoginAdminInterface $login, private RequestInterface $request) {}

    public function page(string $namePage, string $nameTitle, string $nameLayouts)
    {
        // include_once PAGES . "/{$namePage}" . '.php';
        return $this->renderLayouts($nameTitle, $nameLayouts, $this->renderView($namePage));
    }

    private function renderLayouts(string $nameTitle, string $nameLayouts, $content)
    {
        $pathLayouts = LAYOUT."/{$nameLayouts}".'.php';
        if (file_exists($pathLayouts)) {
            ob_start();

            extract($this->defaultData());
            $title = $nameTitle;
            include_once $pathLayouts;

            return ob_get_clean();
        }
    }

    private function renderView($namePage)
    {
        $pathPages = PAGES."/{$namePage}".'.php';
        if (file_exists($pathPages)) {
            ob_start();

            extract($this->defaultData());

            include_once $pathPages;

            return ob_get_clean();
        }
    }

    public function header()
    {

        extract($this->defaultData());
        if ($this->request::uri() == false) {

            require_once LAYOUT.'/headerMain.php';
        } else {
            require_once LAYOUT.'/headerBlog.php';
        }
    }

    private function defaultData(): array
    {
        return [
            'view' => $this,
            'session' => $this->session,
            'login' => $this->login,
            'request' => $this->request,
            'complete' => 'Выполнено',
        ];
    }
}
