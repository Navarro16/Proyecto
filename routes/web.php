<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\CocineroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ReservaLocalController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas para el administrador
Route::middleware(['auth', 'role:Administrador'])->group(function () {
    Route::get('/administrador', [AdministratorController::class, 'index'])->name('administrador.index');
    Route::get('/administrador/empleados', [EmpleadoController::class, 'index'])->name('administrador.empleados.index');
    Route::get('/administrador/empleados/create', [EmpleadoController::class, 'create'])->name('administrador.empleados.create');
    Route::post('/administrador/empleados/store', [EmpleadoController::class, 'store'])->name('administrador.empleados.store');
    Route::get('/administrador/empleados/{id}/edit', [EmpleadoController::class, 'edit'])->name('administrador.empleados.edit');
    Route::put('/administrador/empleados/{id}/update', [EmpleadoController::class, 'update'])->name('administrador.empleados.update');
    Route::delete('/administrador/empleados/{id}/destroy', [EmpleadoController::class, 'destroy'])->name('administrador.empleados.destroy');
    Route::get('/administrador/reservaLocal', [ReservaLocalController::class, 'index'])->name('administrador.reservaLocal.index');
    Route::get('/administrador/reservaLocal/create', [ReservaLocalController::class, 'create'])->name('administrador.reservaLocal.create');
    Route::post('/administrador/reservaLocal/store', [ReservaLocalController::class, 'store'])->name('administrador.reservaLocal.store');
    Route::get('/administrador/reservaLocal/{id}/edit', [ReservaLocalController::class, 'edit'])->name('administrador.reservaLocal.edit');
    Route::put('/administrador/reservaLocal/{id}/update', [ReservaLocalController::class, 'update'])->name('administrador.reservaLocal.update');
    Route::delete('/administrador/reservaLocal/{id}/destroy', [ReservaLocalController::class, 'destroy'])->name('administrador.reservaLocal.destroy');
    Route::get('/administrador/ventas', [AdministratorController::class, 'ventas'])->name('administrador.ventas');
    Route::get('/administrador/ventas/dia', [AdministratorController::class, 'ventasdia'])->name('administrador.ventas.dia');
    Route::get('/administrador/ventas/mes', [AdministratorController::class, 'ventasmes'])->name('administrador.ventas.mes');
    Route::get('/administrador/ventas/ano', [AdministratorController::class, 'ventasano'])->name('administrador.ventas.ano');
    });


// Rutas para el cocinero
Route::middleware(['auth', 'role:Cocinero'])->group(function () {
    Route::get('/cocinero', [CocineroController::class, 'index'])->name('cocinero.index');
    Route::get('plato/create', [PlatoController::class, 'create'])->name('plato.create');
    Route::resource('plato', '\App\Http\Controllers\PlatoController');
});

// Rutas para el usuario
Route::middleware(['auth', 'role:Usuario'])->group(function () {
    Route::get('/usuario', [UsuarioController::class, 'index'])->name('usuario.index');
    Route::get('/usuario/hacerPedido', [PedidoController::class, 'index'])->name('usuario.hacerPedido');
    Route::get('/usuario/crearPedido/{idPlato}', [PedidoController::class, 'store'])->name('usuario.crearPedido');
    Route::get('/usuario/editarPedido/{idPlato}', [PedidoController::class, 'edit'])->name('usuario.editarPedido');
    Route::get('/usuario/gestionarPedidos', [PedidoController::class, 'gestionarPedidos'])->name('usuario.gestionarPedidos');
    Route::get('usuario/verMenu', [UsuarioController::class, 'verMenu'])->name('usuario.verMenu');
    Route::resource('pedido', '\App\Http\Controllers\PedidoController');

    Route::get('/usuario/reservaLocal', [UsuarioController::class, 'ReservaLocal'])->name('usuario.reservaLocal.index');
    Route::get('/usuario/reservaLocal/create', [UsuarioController::class, 'create'])->name('usuario.reservaLocal.create');
    Route::post('/usuario/reservaLocal/store', [UsuarioController::class, 'store'])->name('usuario.reservaLocal.store');
    Route::get('/usuario/reservaLocal/{id}/edit', [UsuarioController::class, 'edit'])->name('usuario.reservaLocal.edit');
    Route::put('/usuario/reservaLocal/{id}/update', [UsuarioController::class, 'update'])->name('usuario.reservaLocal.update');
    Route::delete('/usuario/reservaLocal/{id}/destroy', [UsuarioController::class, 'destroy'])->name('usuario.reservaLocal.destroy');
});






require __DIR__.'/auth.php';
