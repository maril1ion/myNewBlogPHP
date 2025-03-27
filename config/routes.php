<?php

use app\Controllers\BlogsController;
use app\Controllers\HomeController;
use app\Controllers\LoginAdminController;
use core\Router\Route;

return [
    Route::get('/', [HomeController::class, 'index']),
    Route::get('/home', [HomeController::class, 'index']),
    Route::get('/admin/blogs', [BlogsController::class, 'index']),
    Route::get('/admin/blogs/add', [BlogsController::class, 'addPost']),
    Route::post('/admin/blogs/add', [BlogsController::class, 'addPostValidate']),
    Route::get('/login', [LoginAdminController::class, 'index']),
    Route::post('/login', [LoginAdminController::class, 'loginAdmin']),
];
