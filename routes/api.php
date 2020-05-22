<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//验证码
Route::prefix('api/')->group(function ($route) {
    $route->get('captcha/{type?}', 'Api\CaptchaController@index')->name('api.captcha');

});
