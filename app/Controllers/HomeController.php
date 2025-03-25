<?php

namespace app\Controllers;

use core\Controller\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->view('home');
        // View::page('home', 'Контроллер - Домой');
        //        include_once PAGES.'/home.php';
    }

    public function app()
    {
        echo 'This is public method APP form HomeController -> app';
    }
}
