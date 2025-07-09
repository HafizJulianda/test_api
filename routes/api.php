<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserApiController;

Route::get('/users', [UserApiController::class, 'index']);
Route::get('/users/{id}', [UserApiController::class, 'show']);
Route::get('/test', function () {
    return response()->json(['message' => 'API berhasil!']);
});

file_put_contents(base_path('api_test_log.txt'), now() . ' - api.php LOADED' . PHP_EOL, FILE_APPEND);

Route::get('/check', function () {
    return ['status' => 'OK'];
});