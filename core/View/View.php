<?php

namespace core\View;

// use core\Sessions\Session;

class View implements ViewInterface
{
    public function page(string $namePage, string $nameTitle, string $nameLayouts, array $setSessionErrors = [])
    {
        // include_once PAGES . "/{$namePage}" . '.php';
        return $this->renderLayouts($nameTitle, $nameLayouts, $this->renderView($namePage, $setSessionErrors));
    }

    private function renderLayouts(string $nameTitle, string $nameLayouts, $content)
    {
        $pathLayouts = LAYOUT."/{$nameLayouts}".'.php';
        if (file_exists($pathLayouts)) {
            ob_start();
            $title = $nameTitle;
            include_once $pathLayouts;

            return ob_get_clean();
        }
    }

    private function renderView($namePage, array $setSessionErrors)
    {
        $pathPages = PAGES."/{$namePage}".'.php';
        if (file_exists($pathPages)) {
            ob_start();

            $array = ['getSessionErrors' => $setSessionErrors, 'complete' => 'Выполнено!'];
            extract($array);

            include_once $pathPages;

            return ob_get_clean();
        }
    }
}
