<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\HizmetBilgiController;
use App\Http\Controllers\SakinlerBilgiController;

Route::get('/', [HomeController::class, 'index'])->name('homepage');


Route::get('/hizmetler/{id}', [HizmetBilgiController::class, 'show'])->name('hizmetler');
Route::get('/sakinler', [SakinlerBilgiController::class, 'index'])->name('sakinler.index');
Route::get('/sakinler/{id}', [SakinlerBilgiController::class, 'show'])->name('sakinler.show');




Route::get('/services', function () {
    return view('index');
})->name('services');

Route::get('/Baskan', function () {
    return view('profile.president');
})->name('president');

Route::get('/sakinler', function () {
    return view('sakinler');
})->name('sakinler');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
route::get('/home',[AdminController::class, 'index']);
