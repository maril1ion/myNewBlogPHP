<?php

namespace app\Controllers;

use core\Controller\Controller;

class HomeBlogController extends Controller
{
    public function index(): void
    {
        $this->view('home');
        // View::page('home', 'Контроллер - Домой');
        //        include_once PAGES.'/home.php';
    }
}
