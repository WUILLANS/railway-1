<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

//Route::post('/', [PagesController::class, 'fnRegistrar'])->name('Estudiante.xRegistrar');//se define las rutas

Route::get('/Lista', [PagesController::class, 'fnLista'])-> name ('xLista');


//Route::get('detalle/{id}', [PagesController::class, 'fnEstDetalle'])-> name ('Estudiante.xDetalle');

//Route::get('/actualizar/{id}', [PagesController::class, 'fnEstActualizar']) -> name('Estudiante.xActualizar');
//Route::put('/actualizar/{id}', [PagesController::class, 'fnUpdate']) -> name('Estudiante.xUpdate');

//Route::delete('/eliminar/{id}', [PagesController::class, 'fnEliminar']) -> name('Estudiante.xEliminar');

//Route::get('/galeria/{numero?}', [PagesController::class, 'fnGaleria']) -> where('numero','[0-9]+')->name('xGaleria');




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
Route::get('/Curso', [PagesController::class, 'fnListaCurso'])-> name ('xlistaCurso');
Route::get('/', [PagesController::class, 'fnIndex'])-> name ('xIndex');
Route::post('/', [PagesController::class, 'fnRegistrarCurso'])->name('Curso.xRegistrar');


Route::get('detalleCurso/{id}', [PagesController::class, 'fnEstDetalleCurso'])-> name ('Curso.xDetalle');

Route::get('/actualizarCurso/{id}', [PagesController::class, 'fnEstActualizarCurso']) -> name('Curso.xActualizar');
Route::put('/actualizarCurso/{id}', [PagesController::class, 'fnUpdateCurso']) -> name('Curso.xUpdate');

Route::delete('/eliminarCurso/{id}', [PagesController::class, 'fnEliminarCurso']) -> name('Curso.xEliminar');

Route::get('/galeria/{numero?}', [PagesController::class, 'fnGaleria']) -> where('numero','[0-9]+')->name('xGaleria');


///////// ARRIBAa////
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});