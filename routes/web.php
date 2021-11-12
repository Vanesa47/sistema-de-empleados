<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
//use App\Http\Controllers\HomeController;


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
    //return view('welcome');
    return view('auth.login');
});

Route::get('/empleado', function () {
    return view('empleado.index');
});


/* Acceso al controlador de la clase empleado y metodo crear
*/
//Route::get('/empleado/create',[EmpleadoController::class,'create']);
// Acceder a todas las URL De la clase empleado
Route::resource('empleado', 'EmpleadoController');
Auth::routes();
//Route::get('/home',[App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/home',[EmpleadoController::class,'index'])->name('home');
Route::group(['middleware'=>'auth'],function(){
    Route::get('/',[EmpleadoController::class,'index'])->name('home');
});



