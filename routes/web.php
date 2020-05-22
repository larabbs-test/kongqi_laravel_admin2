<?php

use Illuminate\Support\Facades\Route;

//安装
Route::prefix('system/install')->group(function ($route) {
    $route->any('/', 'Install\IndexController@index')->name('system.install');
});



Route::get('/', function () {
    return view('welcome');
});

