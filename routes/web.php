<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorTareas;

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
    return view('tareas');
});

Route::post('/tarea', [ControladorTareas::class, 'nuevo']);

Route::delete('/task/{id}', [ControladorTareas::class, 'borrar'])->where(['id' => '[a-zA-Z0-9]+']);
