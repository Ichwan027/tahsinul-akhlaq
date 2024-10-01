<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
<<<<<<< HEAD
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
=======
use App\Http\Controllers\LandingPage\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/album', [HomeController::class, 'album'])->name('album');
Route::get('/album/{uuid}', [HomeController::class, 'albumShow'])->name('album.show');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}/{uuid}', [HomeController::class, 'blogShow'])->name('blog.show');

Route::get('/employee', [HomeController::class, 'employee'])->name('employee');

Route::get('/facility', [HomeController::class, 'facility'])->name('facility');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/message', [HomeController::class, 'messageStore'])->name('message.store');

Route::get('/alumni', [HomeController::class, 'alumni'])->name('alumni');
Route::post('/alumni', [HomeController::class, 'alumniStore'])->name('alumni.store');

Route::get('clear', [HomeController::class, 'clear']);

Route::prefix('example')->controller(ExampleController::class)->group(function () {
    Route::get('/', 'index');
>>>>>>> 055ca1d21c9b3c426b7d96b9d78d59b160f905bf
    Route::get('/profile', 'profile');
    Route::get('/album', 'album');
    Route::get('/album/{uuid}', 'albumShow');
    Route::get('/employee', 'employee');
<<<<<<< HEAD
=======
    Route::get('/banner', 'banner');
>>>>>>> 055ca1d21c9b3c426b7d96b9d78d59b160f905bf
    Route::get('/alumni', 'alumni');
});
