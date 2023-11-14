<?php

use App\Http\Controllers\MuroController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('dashboard');
})->name('Dashboard');
Route::get('/Productos', [ProductosController::class,'index'])->name('ProductosIndex');

Route::get('/Productos/Create', [ProductosController::class,'create'])->name('ProductosCreate');

Route::post('/Productos', [ProductosController::class,'store'])->name('ProductosStore');
Route::get('/Productos/{producto}/edit', [ProductosController::class,'edit'])->name('ProductosEdit');
Route::patch('/Productos/{producto}', [ProductosController::class,'update'])->name('ProductosUpdate');
Route::delete('/Productos/{producto}', [ProductosController::class,'destroy'])->name('ProductosDestroy');
//Registro
Route::get('/registro',[RegistroController::class,'index'])->name('RegistroIndex');
Route::post('/registro',[RegistroController::class,'store'])->name('RegistroStore');
Route::get('/muro',[MuroController::class,'index'])->name('MuroIndex');
Route::get('/login',[LoginController::class,'index'])->name('LoginIndex');
Route::post('/login',[LoginController::class,'store'])->name('LoginStore');
//logout
Route::post('/logout',[LogoutController::class,'store'])->name('LogoutStore');
