<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UsersController,
    ProjectController
};
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
Route::post('/users', [UsersController::class, 'store'])->name('users.store');
Route::get('/users', [UsersController::class, 'index'])->name('users.listagem');
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');

Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
Route::put('/users/edit/{id}', [UsersController::class, 'update'])->name('users.update');


Route::post('/users/deleteUser', [UsersController::class, 'delete'])->name('users.delete');



Route::get('/projetos', [ProjectController::class, 'index'])->name('projeto.listagem');
Route::post('/projetos', [ProjectController::class, 'store'])->name('projeto.store');
Route::get('/projetos/create', [ProjectController::class, 'create'])->name('projeto.create');

Route::get('/projetos/edit/{id}', [ProjectController::class, 'edit'])->name('projeto.edit');
Route::put('/projetos/edit/{id}', [ProjectController::class, 'update'])->name('projeto.update');
Route::post('/projetos/deleteProj', [ProjectController::class, 'delete'])->name('projeto.delete');


Route::get('/', function () {
    return response()->json(['message' => 'Gerenciador', 'status' => 'Connected','Author' => 'Larissa Moro S. dos Santos' ]);;
});
