<?php

use App\Api\Controller\LoginController;
use Illuminate\Support\Facades\Route;

Route::controller(LoginController::class)->group(function () {
    Route::post('/login/account', 'account');
    Route::post('/login/register', 'register');
    Route::get('/login/logout', 'logout');
    Route::post('/login/codeUrl', 'codeUrl');
    Route::post('/login/oaLogin', 'oaLogin');
    Route::post('/login/mnpLogin', 'mnpLogin');
    Route::post('/login/getScanCode', 'getScanCode');
    Route::post('/login/scanLogin', 'scanLogin');
    Route::post('/login/wechatAuth', 'wechatAuth');
    Route::post('/login/updateUser', 'updateUser');
});
