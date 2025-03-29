<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/relatorios/pdf', [\App\Http\Controllers\RelatorioController::class, 'pdf'])->name('relatorios.pdf');
Route::get('/relatorios/excel', [\App\Http\Controllers\RelatorioController::class, 'excel'])->name('relatorios.excel');