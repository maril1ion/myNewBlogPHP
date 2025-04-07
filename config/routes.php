<?php

use app\Controllers\BlogsController;
use app\Controllers\HomeBlogController;
use app\Controllers\HomeMainController;
use app\Controllers\LoginAdminController;
use app\Middleware\GuestMiddleware;
use app\Middleware\LoginMiddleware;
use core\Router\Route;

return [
    Route::get('', [HomeMainController::class, 'index']),
    // Route::get('/main', [HomeMainController::class, 'index']),
    Route::get('/blog/home', [HomeBlogController::class, 'index']),
    Route::get('/blog/admin/posts', [BlogsController::class, 'index']),
    Route::get('/blog/admin/post/add', [BlogsController::class, 'addPost'], [LoginMiddleware::class]),
    Route::post('/blog/admin/post/add', [BlogsController::class, 'addPostValidate']),
    Route::get('/blog/login', [LoginAdminController::class, 'index'], [GuestMiddleware::class]),
    Route::post('/blog/login', [LoginAdminController::class, 'loginAdmin']),
    Route::post('/blog/logout', [LoginAdminController::class, 'logout']),
];
