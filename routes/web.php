<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BelajarController;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/belajar', [BelajarController::class, 'index'])->name('belajar.index');
    Route::get('/belajar/{topic}', [BelajarController::class, 'show'])->name('belajar.show');
    Route::get('/belajar/{topic}/kuis', [KuisController::class, 'show'])->name('belajar.kuis');

    // Forum
    Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');
    Route::post('/forum', [ForumController::class, 'store'])->name('forum.store');
    Route::get('/forum/{post}', [ForumController::class, 'show'])->name('forum.show');
    Route::delete('/forum/{post}', [ForumController::class, 'destroy'])->name('forum.destroy');

    // Komentar
    Route::post('/forum/{post}/komentar', [CommentController::class, 'store'])->name('forum.komentar.store');
    Route::delete('/forum/{post}/komentar/{comment}', [CommentController::class, 'destroy'])->name('forum.komentar.destroy');

    // Suka postingan
    Route::post('/forum/{post}/suka', [LikeController::class, 'toggle'])->name('forum.suka.toggle');
    // Suka komentar
    Route::post('/forum/{post}/komentar/{comment}/suka', [LikeController::class, 'toggleComment'])->name('forum.komentar.suka.toggle');

    // Profil
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
    Route::patch('/profil', [ProfilController::class, 'update'])->name('profil.update');
    Route::get('/profil/ubah-password', [ProfilController::class, 'ubahPassword'])->name('profil.ubah-password');
    Route::post('/profil/kirim-reset-password', [ProfilController::class, 'kirimResetPassword'])->name('profil.kirim-reset-password');
    Route::patch('/profil/ubah-password', [ProfilController::class, 'simpanPassword'])->name('profil.simpan-password');
    Route::post('/profil/logout', [ProfilController::class, 'logout'])->name('profil.logout');
});

require __DIR__.'/auth.php';
