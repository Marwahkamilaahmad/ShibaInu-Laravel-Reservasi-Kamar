<?php

use App\Http\Controllers\ConsumeController;
use App\Http\Controllers\FdkController;
use App\Http\Controllers\FlkController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('pages.main');
});
Route::get('/docs',[ConsumeController::class, 'view_docs']);
Route::get('/reservation',[ConsumeController::class, 'view_reservation'])->name('reservation');
Route::get('/table_reservation',function () {
    $data = session('data');
    $keyword = session('keyword');
    return view('pages.table_reservation', compact('data', 'keyword'));
})->name('table_reservation');
Route::post('/post_reservation',[ConsumeController::class, 'store']);
