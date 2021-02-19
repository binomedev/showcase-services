<?php

use Binomedev\ShowcaseServices\Http\Controllers\ServicesController;

Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/services/{service:slug}', [ServicesController::class, 'show'])->name('services.show');
