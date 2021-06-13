<?php

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

Route::get('/estudiantes/index', [\App\Http\Controllers\EstudianteController::class, 'registerEstudiante'])->name('estudiante.index');
Route::post('/estudiantes/registrar', [\App\Http\Controllers\EstudianteController::class, 'saveEstudiante'])->name('estudiante.registrarEstudiante');
Route::get('/estudiantes/lista', [\App\Http\Controllers\EstudianteController::class, 'showEstudiante'])->name('estudiante.listarEstudiante');
Route::get('/estudiantes/edit/{id}',[\App\Http\Controllers\EstudianteController::class,'edit'])->name('estudiante.editEstudiante');
Route::post('/estudiantes/update/{id}',[\App\Http\Controllers\EstudianteController::class,'update'])->name('estudiante.updateEstudiante');
Route::get('/estudiantes/delete/{id}',[\App\Http\Controllers\EstudianteController::class,'deleteEstudiante'])->name('estudiante.deleteEstudiante');
Route::get('/generos/index', [\App\Http\Controllers\GeneroController::class, 'registerGenero'])->name('genero.index');
Route::post('/generos/registrar', [\App\Http\Controllers\GeneroController::class, 'saveGenero'])->name('genero.registrarGenero');
Route::get('/generos/lista', [\App\Http\Controllers\GeneroController::class, 'showGenero'])->name('genero.listarGenero');
Route::get('/generos/edit/{id}',[\App\Http\Controllers\GeneroController::class,'edit'])->name('genero.editGenero');
Route::post('/generos/update/{id}',[\App\Http\Controllers\GeneroController::class,'update'])->name('genero.updateGenero');
Route::get('/generos/delete/{id}',[\App\Http\Controllers\GeneroController::class,'deleteGenero'])->name('genero.deleteGenero');
