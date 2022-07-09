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

// Admin
Route::group(['middleware' => 'auth'], function () {
    Route::get('desa', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin-dashboard');

    Route::get('desa/agenda', [App\Http\Controllers\Admin\AgendaController::class, 'index'])->name('admin-agenda');
    Route::get('desa/agenda/tambah', [App\Http\Controllers\Admin\AgendaController::class, 'add'])->name('admin-tambah-agenda');
    Route::post('desa/agenda', [App\Http\Controllers\Admin\AgendaController::class, 'create'])->name('admin-agenda-tambah');
    Route::get('desa/agenda/{id}', [App\Http\Controllers\Admin\AgendaController::class, 'edit'])->name('admin-agenda-edit');
    Route::put('desa/agenda/{id}', [App\Http\Controllers\Admin\AgendaController::class, 'update'])->name('admin-update-agenda');
    Route::delete('desa/agenda/{id}', [App\Http\Controllers\Admin\AgendaController::class, 'delete'])->name('admin-agenda-delete');

    Route::get('desa/profil-desa', [App\Http\Controllers\Admin\ProfilDesaController::class, 'index'])->name('admin-profil-desa');
    Route::get('desa/profil-desa/{id}', [App\Http\Controllers\Admin\ProfilDesaController::class, 'edit'])->name('admin-profil-desa-edit');
    Route::put('desa/profil-desa/{id}', [App\Http\Controllers\Admin\ProfilDesaController::class, 'update'])->name('admin-update-profil-desa');

    Route::get('desa/pendidikan', [App\Http\Controllers\Admin\DataPendidikanController::class, 'index'])->name('admin-pendidikan-desa');
    Route::get('desa/pendidikan/tambah', [App\Http\Controllers\Admin\DataPendidikanController::class, 'add'])->name('admin-tambah-pendidikan-desa');
    Route::post('desa/pendidikan', [App\Http\Controllers\Admin\DataPendidikanController::class, 'create'])->name('admin-pendidikan-desa-tambah');
    Route::get('desa/pendidikan/{id}', [App\Http\Controllers\Admin\DataPendidikanController::class, 'edit'])->name('admin-pendidikan-desa-edit');
    Route::put('desa/pendidikan/{id}', [App\Http\Controllers\Admin\DataPendidikanController::class, 'update'])->name('admin-update-pendidikan-desa');
    Route::delete('desa/pendidikan/{id}', [App\Http\Controllers\Admin\DataPendidikanController::class, 'delete'])->name('admin-pendidikan-desa-delete');

    Route::get('desa/pemerintahan', [App\Http\Controllers\Admin\StrukturPemerintahanController::class, 'index'])->name('admin-pemerintahan-desa');
    Route::get('desa/pemerintahan/tambah', [App\Http\Controllers\Admin\StrukturPemerintahanController::class, 'add'])->name('admin-tambah-pemerintahan-desa');
    Route::post('desa/pemerintahan', [App\Http\Controllers\Admin\StrukturPemerintahanController::class, 'create'])->name('admin-pemerintahan-desa-tambah');
    Route::get('desa/pemerintahan/{id}', [App\Http\Controllers\Admin\StrukturPemerintahanController::class, 'edit'])->name('admin-pemerintahan-desa-edit');
    Route::put('desa/pemerintahan/{id}', [App\Http\Controllers\Admin\StrukturPemerintahanController::class, 'update'])->name('admin-update-pemerintahan-desa');
    Route::delete('desa/pemerintahan/{id}', [App\Http\Controllers\Admin\StrukturPemerintahanController::class, 'delete'])->name('admin-pemerintahan-desa-delete');

    Route::get('desa/berita', [App\Http\Controllers\Admin\BeritaController::class, 'index'])->name('admin-berita-desa');
    Route::get('desa/berita/tambah', [App\Http\Controllers\Admin\BeritaController::class, 'add'])->name('admin-tambah-berita-desa');
    Route::post('desa/berita', [App\Http\Controllers\Admin\BeritaController::class, 'create'])->name('admin-berita-desa-tambah');
    Route::get('desa/berita/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'edit'])->name('admin-berita-desa-edit');
    Route::put('desa/berita/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'update'])->name('admin-update-berita-desa');
    Route::delete('desa/berita/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'delete'])->name('admin-berita-desa-delete');
});