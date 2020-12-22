<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UsersController,
    ProjetoController
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


Route::get('/projetos', [ProjetoController::class, 'index'])->name('produtos.listagem');
Route::post('/projetos', [ProjetoController::class, 'store'])->name('projeto.store');
Route::get('/projetos/create', [ProjetoController::class, 'create'])->name('projeto.create');


Route::get('/', function () {
    return view('welcome');
});
