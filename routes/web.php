<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\GejalaController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PengembangController;
use App\Http\Controllers\User\PetunjukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('User.Dashbord');
Route::get('/petunjuk-user', [PetunjukController::class, 'index'])->middleware(['auth', 'verified'])->name('User.Petunjuk');
Route::get('/pengembang-user', [PengembangController::class, 'index'])->middleware(['auth', 'verified'])->name('User.Pengembang');
Route::get('/gejala-user', [GejalaController::class, 'index'])->middleware(['auth', 'verified'])->name('User.GejalaSolusi');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
