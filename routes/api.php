<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;

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

Route::get('users', [UserController::class, 'index'])->middleware(['auth:sanctum'])->name('users');
Route::prefix('user')->group(function () {
    Route::post('register', [UserController::class, 'register'])->name('user-register');
    Route::post('login', [UserController::class, 'login'])->name('user-login');
    Route::post('logout', [UserController::class, 'logout'])->middleware(['auth:sanctum'])->name('user-logout');
});
