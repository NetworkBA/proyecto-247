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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/perfil', function () {
    return view('jugadores.perfil');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Jugadores', [App\Http\Controllers\HomeController::class, 'Jugadores']);

Route::get('/ListaJugadores', [App\Http\Controllers\jugador::class, 'ListaJugadores']);

Route::post('/CrearJugador', [App\Http\Controllers\jugador::class, 'CrearJugador']);


Route::get('/ListaEquipos', [App\Http\Controllers\equipos::class, 'ListaEquipos']);

Route::get('/ListaEquipos2', [App\Http\Controllers\equipos::class, 'ListaEquipos2']);


Route::get('/Equipos', [App\Http\Controllers\HomeController::class, 'Equipos']);

Route::get('/ListaLigas', [App\Http\Controllers\equipos::class, 'ListaLigas']);

Route::get('/ListaEntrenadores', [App\Http\Controllers\entrenadores_controller::class, 'ListaEntrenadores']);

Route::post('/Crearequipo', [App\Http\Controllers\equipos::class, 'Crearequipo']);

Route::post('/actualizarprofe', [App\Http\Controllers\equipos::class, 'actualizarprofe']);
