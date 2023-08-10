<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Agrupar los middlewares
Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('posts', 'App\Http\Controllers\Api\PostController');
    Route::apiResource('comments', 'App\Http\Controllers\Api\CommentController');
    Route::apiResource('likes', 'App\Http\Controllers\Api\LikeController');
    Route::apiResource('shares', 'App\Http\Controllers\Api\ShareController');
    Route::apiResource('saved', 'App\Http\Controllers\Api\SavedController');
});
