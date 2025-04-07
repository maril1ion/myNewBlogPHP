<?php

namespace app\Controllers;

use core\Controller\Controller;

class HomeMainController extends Controller
{
    public function index()
    {
        $this->view('main/homeMain', 'Мариллион - Главная');
    }
}
