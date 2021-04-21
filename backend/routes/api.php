<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostsApiController;
use App\Http\Controllers\TitleApiController;
use App\Http\Controllers\CategoryForPostController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|CategoryForPostController
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/title', [TitleApiController::class, 'index']);
Route::get('/Dashboard', [DashboardController::class, 'index']);

Route::get('/posts', [PostsApiController::class, 'index']);
Route::get('/category', [CategoryForPostController::class, 'index']);

Route::post('/posts', [PostsApiController::class, 'store']);
Route::put('/posts/{post}', [PostsApiController::class, 'update']);
Route::delete('/posts/{post}', [PostsApiController::class, 'destroy']);
