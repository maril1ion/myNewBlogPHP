<?php

use app\Controllers\BlogsController;
use app\Controllers\HomeController;
use core\Router\Route;

return [
    Route::get('/', [HomeController::class, 'index']),
    Route::get('/home', [HomeController::class, 'index']),
    Route::get('/blogs', [BlogsController::class, 'index']),
    Route::post('/blogs', [BlogsController::class, 'indexPost']),
    Route::get('/blogs/add', [BlogsController::class, 'addPost']),
    Route::post('/blogs/add', [BlogsController::class, 'addPostValidate']),
];
