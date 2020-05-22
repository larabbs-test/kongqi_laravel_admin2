<?php
use Illuminate\Support\Facades\Route;

Route::namespace('Plugin')->group(function ($route) {
    $route->get('/a','BaseController@index');
});
