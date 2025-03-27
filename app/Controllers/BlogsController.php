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

        // validator
        $validation = $this->validate('nameBlog', ['required', 'min:3', 'max:10']);
        $validationErrors = $this->validateErrors();
        if (! $validation) {
            $this->setValidationErorrs();

            $this->redirect('/admin/blogs/add');
        }
        // первый аргумент: название таблицы
        // второй аргумент: ['название колонки' => 'значение из инпута, которое необходимо занести']
        $id = $this->db()->insert('blog_db', ['text' => $this->getInputName('nameBlog')]);
        $this->redirect('/admin/blogs/add');
    }
}
