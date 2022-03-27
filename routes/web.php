<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SixOfCrowsController;

Route::get('/', [SixOfCrowsController::class, 'index']);
Route::get('/chapter/{route_chapter}', [SixOfCrowsController::class, 'openChapter']);
Route::get('/all-chapters', [SixOfCrowsController::class, 'showAllChapters']);