<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TagController;

Route::resource('category',CategoryController::class);
Route::resource('post',PostController::class);
Route::resource('tag',TagController::class);
Route::resource('role',RoleController::class);
