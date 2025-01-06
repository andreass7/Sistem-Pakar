<?php

use App\Http\Controllers\Admin\DataGejalaController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\Home;
use App\Http\Controllers\Admin\PerhitunganController;
use App\Http\Controllers\Admin\RiwayatUserController;
use App\Http\Controllers\Admin\userController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\CaraPerawatan;
use App\Http\Controllers\User\GejalaController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PengembangController;
use App\Http\Controllers\User\PetunjukController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'verified'])->group(function () {
    // user
    Route::get('/', [HomeController::class, 'index'])->name('User.Dashbord');
    Route::get('/petunjuk-user', [PetunjukController::class, 'index'])->name('User.Petunjuk');
    Route::get('/pengembang-user', [PengembangController::class, 'index'])->name('User.Pengembang');
    Route::get('/cara-perawatan', [CaraPerawatan::class, 'index'])->name('User.CaraPerawatan');
    Route::get('/gejala-user', [GejalaController::class, 'index'])->name('User.GejalaSolusi');
    Route::post('/gejala-user', [GejalaController::class, 'hitung'])->name('User.GejalaSolusi');

    // admin
    Route::get('/admin', [Home::class, 'index'])->name('Admin.home');
    Route::get('/admin-user', [userController::class, 'index'])->name('Admin.user');
    Route::get('/admin-Data-Gejala', [DataGejalaController::class, 'index'])->name('Admin.DataGejala');
    Route::get('/admin-riwayat', [RiwayatUserController::class, 'index'])->name('Admin.RiwayatUser');
    Route::get('/admin-riwayat/{id}', [RiwayatUserController::class, 'show'])->name('Admin.Detail');
    Route::get('/admin-perhitungan', [PerhitunganController::class, 'index'])->name('Admin.Perhitungan');
    Route::post('/admin-perhitungan', [PerhitunganController::class, 'hitung'])->name('Admin.Perhitungan');
});



// Route::get('/admin', [Home::class, 'index'])->name('Admin.home');
// Route::get('/admin-user', [userController::class, 'index'])->name('Admin.user');

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
