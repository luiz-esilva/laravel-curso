<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/suporte', [SupportController::class, 'store'])->name('suporte.store');
Route::get('/contato', [SiteController::class, 'contact']);
Route::get('/suporte/criar', [SupportController::class, 'create'])->name('suporte.criar');
Route::get('/suporte', [SupportController::class, 'index'])->name('suporte.index');