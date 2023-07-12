<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MServiceController;
use App\Http\Controllers\MResourceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

    Route::get('/service', [MServiceController::class, 'index'])->name('service.index');
    Route::get('/service/create', [MServiceController::class, 'create'])->name('service.create');
    Route::post('/service/store', [MServiceController::class, 'store'])->name('service.store');
    Route::get('/service/edit/{id}', [MServiceController::class, 'edit'])->name('service.edit');
    Route::post('/service/update/{id}', [MServiceController::class, 'update'])->name('service.update');
    Route::delete('/service/delete/{id}', [MServiceController::class, 'destroy'])->name('service.destroy');
    Route::get('/service/upload-pdf', [MServiceController::class, 'uploadPdf'])->name('service.uploadPdf');
    Route::post('/service/upload', [MServiceController::class, 'upload'])->name('service.upload');

    Route::get('/resource', [MResourceController::class, 'index'])->name('resource.index');
    Route::get('/resource/create', [MResourceController::class, 'create'])->name('resource.create');
    Route::post('/resource/store', [MResourceController::class, 'store'])->name('resource.store');
    Route::get('/resource/edit/{id}', [MResourceController::class, 'edit'])->name('resource.edit');
    Route::post('/resource/update/{id}', [MResourceController::class, 'update'])->name('resource.update');
    Route::delete('/resource/delete/{id}', [MResourceController::class, 'destroy'])->name('resource.destroy');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
