<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get-estudiante', ['\App\Http\Controllers\EstudianteController', 'getAll'])->name('api-getAll');
Route::put('save-estudiante', ['\App\Http\Controllers\EstudianteController', 'saveEstudiante'])->name('api-saveEstudiante');
Route::delete('delete-estudiante/{id}', ['\App\Http\Controllers\EstudianteController', 'deleteEstudiante2'])->name('api-deleteEstudiante2');
Route::post('edit-estudiante/{id}', ['\App\Http\Controllers\EstudianteController', 'editEstudiante2'])->name('api-editEstudiante');
Route::get('show-estudiante', ['\App\Http\Controllers\EstudianteController', 'showEstudiante'])->name('api-showEstudiante');

Route::get('get-genero', ['\App\Http\Controllers\GeneroController', 'getAll'])->name('api-getAll');
Route::put('save-genero', ['\App\Http\Controllers\GeneroController', 'saveGenero'])->name('api-saveGenero');
Route::delete('delete-genero/{id}', ['\App\Http\Controllers\GeneroController', 'deleteGenero2'])->name('api-deleteGenero2');
Route::post('edit-genero/{id}', ['\App\Http\Controllers\GeneroController', 'editGenero2'])->name('api-editGenero');
Route::get('show-genero', ['\App\Http\Controllers\GeneroController', 'showGenero'])->name('api-showGenero');
