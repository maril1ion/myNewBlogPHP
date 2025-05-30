<?php

namespace app\Controllers;

use core\Controller\Controller;

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
        // names inputs:
        // category:
        // validator
        $validation = $this->validate('nameBlog', ['required', 'min:3', 'max:10']);
        $validationErrors = $this->validateErrors();
        if (! $validation) {
            $this->setValidationErorrs();

            $this->redirect('/blog/admin/post/add');
        }
        // первый аргумент: название таблицы
        // второй аргумент: ['название колонки' => 'значение из инпута, которое необходимо занести']
        $id = $this->db()->insert('blog_db', ['text' => $this->getInputName('nameBlog')]);
        $this->redirect('/blog/home');
    }
}
