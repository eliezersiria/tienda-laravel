<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\MarcasVehiculoController;
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


Route::get('/', fn () => view('home'))->name('inicio');
Route::get('/inicio/mapasitio/', [InicioController::class, 'index'])->name('inicio.mapasitio');
Route::get('/inicio/informacion/', [InicioController::class, 'informacion'])->name('inicio.info');



Route::get('/marcas', [MarcasVehiculoController::class, 'index'])->name('marcas.inicio');
Route::get('/marcas/agregar', [MarcasVehiculoController::class, 'create'])->name('marcas.agregar');
Route::post('/marcas/guardar', [MarcasVehiculoController::class, 'store'])->name('marcas.guardar');
Route::get('/marcas/listar', [MarcasVehiculoController::class, 'show'])->name('marcas.listar');
Route::get('/marcas/editar-marca/{marcasVehiculo}', [MarcasVehiculoController::class, 'edit'])->name('marcas.editar');
