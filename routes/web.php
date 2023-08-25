<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Semilleristas;
use App\Http\Controllers\Coordinadores;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\Semilleros;
use App\Http\Controllers\Proyectos;
use App\Http\Controllers\Eventos;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/principal', function () {
    return view('main');
});
Route::get('/semilleros', function () {
    return view('Semilleros.main');
});


Route::get('signup_semillerista', [Semilleristas::class, 'signup'])->name('signup_semillerista');
Route::get('principal', [DirectorController::class, 'mainDir'])->name('main_dir');
Route::post('dir_signup', [DirectorController::class, 'authPass'])->name('dir_signup');
Route::post('coord_signup', [Coordinadores::class, 'authPass'])->name('coord_signup');

Route::post('reg_semillerista', [Semilleristas::class, 'registrar'])->name('reg_semillerista');
Route::post('act_semillerista/{id}', [Semilleristas::class, 'actualizar'])->name('act_semillerista');
Route::post('del_semillerista/{id}', [Semilleristas::class, 'eliminar'])->name('del_semillerista');

Route::post('reg_semillero', [Semilleros::class, 'registrar'])->name('reg_semillero');
Route::post('act_semillero/{id}', [Semilleros::class, 'actualizar'])->name('act_semillero');
Route::get('del_semillero/{id}', [Semilleros::class, 'eliminar'])->name('del_semillero');
Route::get('gest_semillero/{id}', [Semilleros::class, 'gestionar'])->name('gest_semillero');

Route::post('reg_coordinador', [Coordinadores::class, 'registrar'])->name('reg_coordinador');

Route::post('reg_director', [DirectorController::class, 'registrar'])->name('reg_director');


Route::post('reg_proyecto/{id}', [Proyectos::class, 'registrar'])->name('reg_proyecto');
Route::post('act_proyecto/{id}', [Proyectos::class, 'actualizar'])->name('act_proyecto');
Route::post('del_proyecto/{id}', [Proyectos::class, 'eliminar'])->name('del_proyecto');

Route::post('reg_evento/{id}', [Eventos::class, 'registrar'])->name('reg_evento');
Route::post('act_evento/{id}/{sem}', [Eventos::class, 'actualizar'])->name('act_evento');
Route::post('del_evento/{id}', [Eventos::class, 'eliminar'])->name('del_evento');



