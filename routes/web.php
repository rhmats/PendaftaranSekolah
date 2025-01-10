<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminDataOrangtuaController;
use App\Http\Controllers\Admin\AdminDataPesertaController;
use App\Http\Controllers\Admin\AdminDetailDataOrangtuaController;
use App\Http\Controllers\Admin\AdminDetailDataPesertaController;
use App\Http\Controllers\Admin\AdminDokumenController;
use App\Http\Controllers\Admin\AdminPembayaranController;
use App\Http\Controllers\Admin\DetailPembayaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\DatadiriController;
use App\Http\Controllers\User\DataOrangtuaController;
use App\Http\Controllers\User\DokumenController;
use App\Http\Controllers\User\PembayaranController;
use App\Http\Controllers\User\ResumeController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'UserMiddleware'])->group(function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::resource('datadiri', DatadiriController::class);
    Route::resource('dataorangtua', DataOrangtuaController::class);
    Route::resource('dokumen', DokumenController::class);
    Route::resource('pembayaran', PembayaranController::class);
    Route::resource('resume', ResumeController::class);
});

Route::middleware(['auth', 'AdminMiddleware'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('admin-pembayaran', AdminPembayaranController::class);
    Route::resource('admin-detail-pembayaran', DetailPembayaranController::class);
    Route::resource('admin-datadiri', AdminDataPesertaController::class);
    Route::resource('admin-detail-datadiri', AdminDetailDataPesertaController::class);
    Route::resource('admin-data-orangtua', AdminDataOrangtuaController::class);
    Route::resource('admin-detail-data-orangtua', AdminDetailDataOrangtuaController::class);
    Route::resource('admin-dokumen', AdminDokumenController::class);
});
