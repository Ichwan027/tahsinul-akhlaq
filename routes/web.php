<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PonpesController;

Route::get('', [PonpesController::class, 'index']);
Route::get('tentang', [PonpesController::class, 'tentang'])->name('tentang');
Route::get('album', [PonpesController::class, 'album'])->name('album');
Route::get('album/{uuid}', [PonpesController::class, 'albumShow'])->name('albumShow');
Route::get('detail_album', [PonpesController::class, 'detail_album'])->name('detail_album');
Route::get('kontak', [PonpesController::class, 'kontak'])->name('kontak');


Route::get('test', [PonpesController::class, 'test']);

Route::get('clear', [PonpesController::class, 'clear']);

Route::prefix('example')->controller(ExampleController::class)->group(function () {
    Route::get('/profile', 'profile');
    Route::get('/album', 'album');
    Route::get('/album/{uuid}', 'albumShow');
    Route::get('/employee', 'employee');
});
