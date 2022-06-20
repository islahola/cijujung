<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

//frontend
Route::get('/', [App\Http\Controllers\Frontend\homepageController::class, 'index'])->name('/');

Route::get('/berita', [App\Http\Controllers\Frontend\beritaController::class, 'seluruh_berita'])->name('berita');
Route::get('/baca-berita/{slug}', [App\Http\Controllers\Frontend\beritaController::class, 'detail'])->name('baca-berita');

Route::get('/agenda', [App\Http\Controllers\Frontend\agendaController::class, 'seluruh_agenda'])->name('agenda');

Route::get('/profil-desa', [App\Http\Controllers\Frontend\profilController::class, 'index'])->name('profil-desa');

Route::get('/data-desa', [App\Http\Controllers\Frontend\dataDesaController::class, 'index'])->name('data-desa');