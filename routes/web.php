<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AppController::class, 'index']);

Route::get('/berita-lainnya', [AppController::class, 'berita'])->name('berita-lainnya');
Route::get('/foto-lainnya', [AppController::class, 'photo'])->name('foto-lainnya');
Route::get('/video-lainnya', [AppController::class, 'video'])->name('video-lainnya');

Route::get('/detail/{slug}', [AppController::class, 'detail']);

Route::get('/foto', function () {
    return view('foto.foto');
});

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita')->middleware('auth');
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create')->middleware('auth');
Route::post('/berita/store', [BeritaController::class, 'store'])->name('berita.store')->middleware('auth');
Route::get('/berita/edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit')->middleware('auth');
Route::post('/berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update')->middleware('auth');
Route::post('/berita/destroy/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy')->middleware('auth');

Route::get('/photo', [PhotoController::class, 'index'])->name('photo')->middleware('auth');
Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store')->middleware('auth');
Route::post('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update')->middleware('auth');
Route::post('/photo/destroy/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy')->middleware('auth');

Route::get('/video', [VideoController::class, 'index'])->name('video')->middleware('auth');
Route::post('/video/store', [VideoController::class, 'store'])->name('video.store')->middleware('auth');
Route::post('/video/update/{id}', [VideoController::class, 'update'])->name('video.update')->middleware('auth');
Route::post('/video/destroy/{id}', [VideoController::class, 'destroy'])->name('video.destroy')->middleware('auth');
