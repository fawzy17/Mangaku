<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [MangaController::class, 'index'])->name('data-manga');
Route::get('/data-manga', [MangaController::class, 'index'])->name('data-manga');
Route::get('/create-manga', [MangaController::class, 'create'])->name('create-manga');
Route::post('/input-manga', [MangaController::class, 'store'])->name('input-manga');
Route::get('/edit-manga/{id}', [MangaController::class, 'edit'])->name('edit-manga');
Route::post('/update-manga/{id}', [MangaController::class, 'update'])->name('update-manga');
Route::get('/delete-manga/{id}', [MangaController::class, 'destroy'])->name('delete-manga');



