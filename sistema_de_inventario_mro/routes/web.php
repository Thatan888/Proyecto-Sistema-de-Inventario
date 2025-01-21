<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/inventario', [InventarioController::class, 'inventario'])->name('inventario');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/reportes', [ReportesController::class, 'reportes'])->name('reportes');
    