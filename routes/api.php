<?php

use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\ResumeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\AuthSessionController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
Route::middleware(middleware: 'auth:sanctum')->get(uri:'/blog',function
{
    return "auth kerak bolgan url";
});
*/





/*  cookie fayillar ucun
Route::post('login',[AuthSessionController::class, 'login']);
Route::post('register',[AuthSessionController::class, 'register']);
Route::post('logout',[AuthSessionController::class, ''])->middleware('auth:sanctum');
*/

Route::post('login',[AuthController::class, 'login']);
Route::post('register',[AuthController::class, 'register']);
Route::post('logout',[AuthController::class, ''])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();


});

Route::apiResource('news',NewsController::class );
Route::apiResource('team',TeamController::class);
Route::apiResource('contact',ContactController::class);
Route::apiResource('resume',ResumeController::class);

