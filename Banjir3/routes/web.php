<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BanjirController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/banjir', [BanjirController::class, 'create'])->name('banjir.create');          // form (GET)
Route::post('/banjir', [BanjirController::class, 'store'])->name('banjir.store');           // kirim form (POST) -> konfirmasi
Route::get('/banjir/daftar', [BanjirController::class, 'index'])->name('banjir.index');     // daftar laporan