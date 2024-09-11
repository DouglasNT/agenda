<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

Route::get('/salvar-agenda', [AgendaController::class,'showFormulario'])->name('mostra-formulario');

Route::post('/salvar-agenda', [AgendaController::class, 'salvarContato'])->name('cadastrar-formulario');

Route::delete('/apaga-agenda/{id}', [AgendaController::class, 'destroy'])->name('apaga-agenda');

Route::put('/alterar-agenda/{id}', [AgendaController::class, 'update'])->name('altera-agenda');