<?php

use App\Http\Controllers\LaporController;
use Illuminate\Support\Facades\Route;

Route::get('/form', [laporController::class, 'form']);
Route::post('/simpan', [laporController::class, 'simpan']);
Route::get('/daftar-laporan', [laporController::class, 'daftar']);