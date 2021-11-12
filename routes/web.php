<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorTareas;
use App\Models\Tarea;

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
    return view('index');
});

Route::get('/nuevo', [ControladorTareas::class, 'nuevo']);

Route::get('/show', function() {
    $tareas = Tarea::get();
    return view('show', ['tareas' => $tareas]);
});

Route::post('/tarea', [ControladorTareas::class, 'nuevaTarea']);

Route::delete('/tarea/{id}', [ControladorTareas::class, 'borrar'])->where(['id' => '[a-zA-Z0-9]+']);
