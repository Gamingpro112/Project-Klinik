<?php

use App\Http\Controllers\Front\DataController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\LayananController;
use App\Http\Controllers\Front\Auth\LoginController;
use App\Http\Controllers\Front\RuangMediaController;
use App\Http\Controllers\Front\TentangKamiController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\HamletController as AdminHamletController;
use App\Http\Controllers\Admin\HouseDataController as AdminHouseDataController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AxiosController;
use App\Http\Controllers\Kabupaten\DashboardController as KabupatenDashboardController;
use App\Http\Controllers\Kabupaten\UserController as KabupatenUserController;
use App\Http\Controllers\Kadis\DashboardController as KadisDashboardController;
use App\Http\Controllers\Operator\DashboardController as OperatorDashboardController;
use App\Http\Controllers\Operator\UserController as OperatorUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Front Routes
Route::get('/', [HomeController::class, 'index'])->name('front.home');
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('front.tentang-kami');
Route::get('/front/login', [LoginController::class, 'index'])->name('front.login');
Route::get('/informasi', [LayananController::class, 'index'])->name('front.layanan.index');
Route::get('/fasilitas', [LayananController::class, 'fasilitas'])->name('front.layanan.fasilitas');
Route::get('/kemitraan', [LayananController::class, 'kemitraan'])->name('front.layanan.kemitraan');
Route::get('/konsultasi', [LayananController::class, 'konsultasi'])->name('front.layanan.konsultasi');
Route::get('/program', [LayananController::class, 'program'])->name('front.layanan.program');
Route::get('/teknologi', [LayananController::class, 'teknologi'])->name('front.layanan.teknologi');
Route::get('/media-publikasi', [RuangMediaController::class, 'mediaPublikasi'])->name('front.ruang-media.media-publikasi');
Route::get('/artikel', [RuangMediaController::class, 'artikel'])->name('front.ruang-media.artikel');
Route::get('/galeri', [RuangMediaController::class, 'galeri'])->name('front.ruang-media.galeri');
Route::get('/agenda', [RuangMediaController::class, 'agenda'])->name('front.ruang-media.agenda');
Route::get('/data', [DataController::class, 'index'])->name('front.data.index');

Route::prefix('/admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        // User
        Route::middleware(['role:admin|kabupaten|operator'])->group(function () {
            Route::get('/user', [UserController::class, 'index'])->name('user');
            Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
            Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
            Route::get('/user/edit/{uuid}', [UserController::class, 'edit'])->name('user.edit');
            Route::put('/user/update/{uuid}', [UserController::class, 'update'])->name('user.update');
            Route::get('/user/edit-password/{uuid}', [UserController::class, 'editPassword'])->name('user.edit.password');
            Route::put('/user/update-password/{uuid}', [UserController::class, 'updatePassword'])->name('user.update.password');
            Route::delete('/user/delete/{uuid}', [UserController::class, 'destroy'])->name('user.delete');
        });
        Route::middleware(['auth', 'role:admin'])->group(function () {
            // House Data
            Route::get('/data', [AdminHouseDataController::class, 'index'])->name('admin.house.data');
            Route::get('/data/create', [AdminHouseDataController::class, 'create'])->name('admin.house.data.create');
            Route::post('/data/store', [AdminHouseDataController::class, 'store'])->name('admin.house.data.store');
            Route::get('/data/detail/{uuid}', [AdminHouseDataController::class, 'show'])->name('admin.house.data.show');
            Route::get('/data/edit/{uuid}', [AdminHouseDataController::class, 'edit'])->name('admin.house.data.edit');
            Route::put('/data/update/{uuid}', [AdminHouseDataController::class, 'update'])->name('admin.house.data.update');
            Route::delete('/data/delete/{uuid}', [AdminHouseDataController::class, 'destroy'])->name('admin.house.data.delete');

            // Hamlet
            Route::get('/dusun', [AdminHamletController::class, 'index'])->name('admin.hamlet');
            Route::get('/dusun/create/{id}', [AdminHamletController::class, 'create'])->name('admin.hamlet.create');
            Route::post('/dusun/store/{id}', [AdminHamletController::class, 'store'])->name('admin.hamlet.store');
            Route::get('/dusun/detail/{id}', [AdminHamletController::class, 'show'])->name('admin.hamlet.show');
            Route::get('/dusun/edit/{uuid}', [AdminHamletController::class, 'edit'])->name('admin.hamlet.edit');
            Route::put('/dusun/update/{uuid}', [AdminHamletController::class, 'update'])->name('admin.hamlet.update');
            Route::delete('/dusun/delete/{uuid}', [AdminHamletController::class, 'destroy'])->name('admin.hamlet.delete');
        });
    });
});

Route::prefix('/operator')->group(function () {
    Route::middleware(['auth', 'role:operator'])->group(function () {
        Route::get('/dashboard', [OperatorDashboardController::class, 'index'])->name('operator.dashboard');
    });
});

Route::prefix('/kadis')->group(function () {
    Route::middleware(['auth', 'role:kepala dinas'])->group(function () {
        Route::get('/dashboard', [KadisDashboardController::class, 'index'])->name('kadis.dashboard');
    });
});

Route::prefix('/kabupaten')->group(function () {
    Route::middleware(['auth', 'role:kabupaten'])->group(function () {
        Route::get('/dashboard', [KabupatenDashboardController::class, 'index'])->name('kabupaten.dashboard');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/district', [AxiosController::class, 'district'])->name('district');
Route::post('/village', [AxiosController::class, 'village'])->name('village');

require __DIR__ . '/auth.php';
