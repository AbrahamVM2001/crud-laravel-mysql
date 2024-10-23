<?php

use App\Http\Controllers\PersonasController;
use Illuminate\Support\Facades\Route;
// Route es la funcion de las rutas
// get es el tipo de https
// Todo en parentesis
// PersoanasController es el controlador
// ::class es para llamar la clase
// 'index es la funcion que mandamos a llamar
Route::get('/', [PersonasController::class, 'index'])->name('personas.index');
Route::get('/create', [PersonasController::class, 'create'])->name('personas.create');
Route::post('/store', [PersonasController::class, 'store'])->name('personas.store');
Route::get('/edit/{id}', [PersonasController::class, 'edit'])->name('personas.edit');
Route::put('/update/{id}', [PersonasController::class, 'update'])->name('personas.update');
Route::get('/show/{id}', [PersonasController::class, 'show'])->name('personas.show');
Route::delete('/destroy/{id}', [PersonasController::class, 'destroy'])->name('personas.destroy');