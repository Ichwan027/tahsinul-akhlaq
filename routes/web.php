<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\Ponpes1Controller;

Route::get('', [Ponpes1Controller::class, 'index']);
Route::get('tentang', [Ponpes1Controller::class, 'tentang'])->name('tentang');
Route::get('album', [Ponpes1Controller::class, 'album'])->name('album');
Route::get('album/{uuid}', [Ponpes1Controller::class, 'albumShow'])->name('albumShow');
Route::get('detail_album', [Ponpes1Controller::class, 'detail_album'])->name('detail_album');
Route::get('kontak', [Ponpes1Controller::class, 'kontak'])->name('kontak');


Route::get('test', [Ponpes1Controller::class, 'test']);

Route::get('clear', [Ponpes1Controller::class, 'clear']);

Route::prefix('example')->controller(ExampleController::class)->group(function () {
    Route::get('/profile', 'profile');
    Route::get('/album', 'album');
    Route::get('/album/{uuid}', 'albumShow');
    Route::get('/employee', 'employee');
    Route::get('/alumni', 'alumni');
});
