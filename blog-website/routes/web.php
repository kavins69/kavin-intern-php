<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/home',[BlogController::class, 'home']);
Route::get('/create',[BlogController::class, 'create']);
Route::get('/views',[BlogController::class, 'views']);

Route::post('/store',[BlogController::class, 'store']);

