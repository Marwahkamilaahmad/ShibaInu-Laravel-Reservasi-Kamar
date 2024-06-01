<?php

use App\Http\Controllers\ConsumeController;
use App\Http\Controllers\FdkController;
use App\Http\Controllers\FlkController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('pages.main');
});
Route::get('/docs',[ConsumeController::class, 'view_docs']);
Route::get('/reservation',[ConsumeController::class, 'view_reservation']);
