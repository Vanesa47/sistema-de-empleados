<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
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

Route::get('/empleado', function () {
    return view('empleado.index');
});


/* Acceso al controlador de la clase empleado y metodo crear
*/
//Route::get('/empleado/create',[EmpleadoController::class,'create']);
// Acceder a todas las URL De la clase empleado
Route::resource('empleado', EmpleadoController::class);