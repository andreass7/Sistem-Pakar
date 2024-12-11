<?php

use App\Http\Controllers\Admin\Home;
use App\Http\Controllers\Admin\userController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\CaraPerawatan;
use App\Http\Controllers\User\GejalaController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PengembangController;
use App\Http\Controllers\User\PetunjukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('User.Dashbord');
Route::get('/petunjuk-user', [PetunjukController::class, 'index'])->middleware(['auth', 'verified'])->name('User.Petunjuk');
Route::get('/pengembang-user', [PengembangController::class, 'index'])->middleware(['auth', 'verified'])->name('User.Pengembang');
Route::get('/cara-perawatan', [CaraPerawatan::class, 'index'])->middleware(['auth', 'verified'])->name('User.CaraPerawatan');
Route::get('/gejala-user', [GejalaController::class, 'index'])->middleware(['auth', 'verified'])->name('User.GejalaSolusi');


Route::get('/admin', [Home::class, 'index'])->name('Admin.home');
Route::get('/admin-user', [userController::class, 'index'])->name('Admin.user');

// Route::get('admin', function () {
//     return view('Admin.Home');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
