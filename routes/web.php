<?php

use App\Http\Controllers\Clientes;
use App\Http\Controllers\Usuario;
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

Route::get('/', [Usuario::class, 'index'])->name('login');
Route::post('/logear', [Usuario::class, 'logear'])->name('logear');
Route::get('/logout', [Usuario::class, 'logout'])->name('logout');
Route::get('/agregarUsuario', [Usuario::class, 'agregarUsuario']);
Route::get('/inicio', [Clientes::class, 'index'])->name('inicio');

