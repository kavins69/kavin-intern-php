<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/home',[BlogController::class, 'home']);
Route::get('/create',[BlogController::class, 'create']);
Route::get('/views',[BlogController::class, 'views']);
Route::get('/views/{id}',[BlogController::class, 'viewblog'])->name('viewsroute');
Route::get('views/{id}/edit',[BlogController::class, 'edit']);
Route::get('/create/upload_file',[BlogController::class, 'upload']);


Route::post('/store',[BlogController::class, 'store']);
Route::post('/create/upload_file',[BlogController::class, 'uploadpost'])->name('upload');
Route::put('/update/{blog}',[BlogController::class, 'update'])->name('updateBlog');

Route::delete('/delete/{blog}',[BlogController::class,'delete'])->name('deleteBlog');
