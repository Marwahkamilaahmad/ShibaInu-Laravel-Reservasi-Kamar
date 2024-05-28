<?php

use App\Http\Controllers\FdkController;
use App\Http\Controllers\FlkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.main');
});

Route::get('/create-flk',[FlkController::class, 'create']);
Route::get('/create-fdk',[FdkController::class, 'create']);
