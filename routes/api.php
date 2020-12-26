<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UsersControllerAPI,
    ProjectControllerAPI
};
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

Route::get('/', function () {
    return response()->json(['message' => 'Gerenciador', 'status' => 'Connected','Author' => 'Larissa Moro S. dos Santos' ]);;
});
//Rotas API para usuarios/funcionarios
Route::get('/users', [UsersControllerAPI::class, 'index'])->name('users.listagem');
Route::get('/users/show/{id}', [UsersControllerAPI::class, 'show'])->name('users.mostra');
Route::post('/users', [UsersControllerAPI::class, 'store'])->name('users.store');
Route::put('/users/edit/{id}', [UsersControllerAPI::class, 'update'])->name('users.update');
Route::delete('/users/delete/{id}', [UsersControllerAPI::class, 'delete'])->name('users.deleta');

//Rotas API para projetos
Route::get('/projetos', [ProjectControllerAPI::class, 'index'])->name('projeto.listagem');
Route::get('/projetos/show/{id}', [ProjectControllerAPI::class, 'show'])->name('projeto.mostra');
Route::post('/projetos', [ProjectControllerAPI::class, 'store'])->name('projeto.store');
Route::put('/projetos/edit/{id}', [ProjectControllerAPI::class, 'update'])->name('projeto.update');
Route::delete('/projetos/delete/{id}', [ProjectControllerAPI::class, 'delete'])->name('projeto.deleta');