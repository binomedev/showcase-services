<?php

use Binomedev\ShowcaseServices\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['web']], function () {
    Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
    Route::get('/services/{service:slug}', [ServicesController::class, 'show'])->name('services.show');
});


