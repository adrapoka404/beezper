<?php

use App\Http\Controllers\Dashboard\ActividadController;
use App\Http\Controllers\Dashboard\DesarrolladorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\IngresoController;
use App\Http\Controllers\Dashboard\InversionistaController;
use App\Http\Controllers\Dashboard\UsuarioController;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;
use App\Http\Controllers\Dashboard\RoleController;


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

Route::resource('ingresos', IngresoController::class)
    ->only(['index', 'create','store','edit','update'])
    ->names('dashboard.ingresos');

Route::resource('actividades', ActividadController::class)
    ->only(['index', 'create','store','edit','update'])
    ->names('dashboard.actividades');
Route::resource('usuarios', UsuarioController::class)
    ->only(['index','edit','update'])
    ->names('dashboard.usuarios');

Route::resource('inversionistas', InversionistaController::class)
    ->only(['create', 'store','edit','update'])
    ->names('dashboard.inversionistas');

    Route::resource('desarrolladores', DesarrolladorController::class)
    ->only(['create', 'store','edit','update'])
    ->names('dashboard.desarrolladores');

Route::middleware(['auth:sanctum', 'verified', 'can:dashboard'])->get('/dashboard', function () {
   die('aqui si llego');// return view('dashboard');
})->name('dashboard');

//rutas para roles y permisos
Route::resource('roles', RoleController::class)
    ->names('dashboard.roles');