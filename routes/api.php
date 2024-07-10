<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\UserController;
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

Route::get('/', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'authLogin'])->name('auth.login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/admin/dashboard', [UserController::class, 'login'])->name('dashboad');



Route::get('/admin/admin/list', [AdminController::class, 'list'])->name('admin.list');




Route::get('/admin/general_projects/list', [ProjectController::class, 'index'])->name('general_projects.list');
Route::get('/admin/general_projects/add', [ProjectController::class, 'add'])->name('general_projects.add');
Route::post('/admin/general_projects/add', [ProjectController::class, 'store'])->name('general_projects.store');
Route::get('/admin/general_projects/view_project/{id}', [ProjectController::class, 'view_project'])->name('general_projects.view_project');
Route::get('/admin/general_projects/edit/{id}', [ProjectController::class, 'show'])->name('general_projects.edit');
Route::post('/admin/general_projects/edit/{id}', [ProjectController::class, 'update'])->name('general_projects.update');



//PEOPLE ROUTES
Route::get('/admin/people/list', [PersonController::class, 'list'])->name('people.list');



//TECHNOLOGY ROUTES
Route::get('/admin/technology/list', [TechnologyController::class, 'list'])->name('technology.list');




//PROCESS ROUTES
Route::get('/admin/process/list', [ProcessController::class, 'list'])->name('process.list');



//PROCESS ROUTES
Route::get('/admin/project_management', [TaskController::class, 'taskList'])->name('task.list');
