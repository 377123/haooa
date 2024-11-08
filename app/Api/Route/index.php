<?php

use App\Api\Controller\IndexController;
use Illuminate\Support\Facades\Route;

// 获取 router 文件夹内的所有路由文件
$directory = __DIR__;
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));
foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php' && $file->getFilename() !== 'index.php') {
        // 加载每个路由文件
        require $file->getRealPath();
    }
}
Route::controller(IndexController::class)->group(function () {
    Route::get('index/index', 'index');
    Route::get('index/config', 'config');
    Route::get('index/policy', 'policy');
    Route::get('index/decorate', 'decorate');
});
