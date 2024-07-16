<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\UserController;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('login', LoginController::class);
        Route::post('register', RegisterController::class);
    });

    //Auth routes
    Route::middleware(['auth:sanctum'])
        ->group(function () {

            Route::get('user', function(){
                return new UserResource(auth()->user());
            });
        });
});
