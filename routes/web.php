<?php

use App\Http\Controllers\FlkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/create-flk',[FlkController::class, 'create']);
