<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\usuariosController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//modificado
Route::get('users', [usuariosController::class, 'index']); //accede al metodo index en el controllador
Route::resource('users', usuariosController::class); //establece el recurso a mostrar

Route::get('user/{id}', [usuariosController::class, 'show']); //accede al metodo index en el controllador
Route::resource('user', usuariosController::class); //establece el recurso a mostrar para la ruta correspondiente

Route::post('add_user', [usuariosController::class, 'store']);//creamos el acceso para el metodo post


Route::put('mod_user/{id}', [usuariosController::class, 'update'])->name('ingresar.datos');
Route::resource('mod_user', usuariosController::class); //establece el recurso a mostrar para la ruta correspondiente
//Route::put('editar', [userController::class, 'update']);

Route::delete('delete_user/{id}', [usuariosController::class, 'destroy']);
?>