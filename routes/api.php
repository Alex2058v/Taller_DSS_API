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
Route::get('get_users', [usuariosController::class, 'index']); // Accede al método index en el controlador
Route::resource('get_users', usuariosController::class); //establece el recurso a mostrar
Route::post('store_user', [usuariosController::class, 'store']); // Crea un usuario
Route::get('get_user/{usuario}', [usuariosController::class, 'show']); // Obtiene un usuario específico
Route::put('update_user/{usuario}', [usuariosController::class, 'update']); // Actualiza un usuario específico
Route::delete('delete_user/{usuario}', [usuariosController::class, 'destroy']); // Elimina un usuario específico


?>