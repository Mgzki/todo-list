<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [TodoListController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard', [TodoListController::class, 'store']);
Route::get('/dashboard/create', [TodoListController::class, 'create']);
Route::get('/dashboard/{todoList:slug}/edit', [TodoListController::class, 'edit']);
Route::put('/dashboard/{todoList:slug}', [TodoListController::class, 'update']);
Route::get('/dashboard/{todoList:slug}', [TodoListController::class, 'show']);
Route::delete('/dashboard/{todoList:slug}', [TodoListController::class, 'destroy']);

require __DIR__.'/auth.php';
