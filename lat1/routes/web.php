<?php
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\DataController;
use App\Http\Controllers\LaporBanjirController;

Route::get('/lapor-banjir', [LaporBanjirController::class, 'form'])
    ->name('banjir.form');

Route::post('/lapor-banjir/proses', [LaporBanjirController::class, 'proses'])
    ->name('banjir.proses');

//root dapatkan
Route::get('/hello', function () {
    return 'Hello,Cia';
});

Route::get('/user/{name}', function ($name) {
    return "Nama Saya $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "Hallo, $name";
});

Route::get('/profile', function () { //enpoint
    return view ('profile');
})->name('halaman.profile');

Route::get('/about', function () {
    return view ('about',['name' => 'Cia']);
});

Route::get('/home', function () {
    return 'Hallo,ini adalah halaman Home';
}) ->name ('home.page');

Route::get('/form',[DataController::class,'form']);
Route::post('/proses',[DataController::class,'proses'])->name('halaman.proses');
