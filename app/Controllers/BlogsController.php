<?php

namespace app\Controllers;

use core\Controller\Controller;

// use core\Redirect\Redirect;

class BlogsController extends Controller
{
    public function index()
    {

        $this->view('blogs');
    }

    public function addPost()
    {
        $this->view('blogs/addPost');
    }

    public function addPostValidate()
    {

        //        $request = $this->request()->getRequest();
        // validator
        $validation = $this->validate('nameBlog', ['required', 'min:3', 'max:10']);
        $validationErrors = $this->validateErrors();
        if (! $validation) {
            // ? Получение данных из поля инпута
            //            dump($this->getInputName('nameBlog'));
            $this->setValidationErorrs();
            $this->redirect('/blogs/add');
        }
        $id = $this->db()->insert('blog_db', ['text' => $this->getInputName('nameBlog')]);

        //        else {
        //            $this->setValidationErorrs();
        //            $this->redirect('/blogs/add');
        //        }
        // первый аргумент: название таблицы
        // второй аргумент: ['название колонки' => 'значение из инпута, которое необходимо занести']
    }
}
