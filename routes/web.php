<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AbsenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ManualController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/process_login', [LoginController::class, 'process'])->name('process.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/err_403', [LoginController::class, 'err403'])->name('err_403');




Route::group(['middleware' => ['auth', 'CekLevel:Administrator']], function () {
    Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan.list');
    Route::post('/jabatan/store', [JabatanController::class, 'store'])->name('jabatan.store');
    Route::post('/jabatan/edits', [JabatanController::class, 'edits'])->name('edits.jbt');
    Route::post('/jabatan/updates', [JabatanController::class, 'updates'])->name('updates.jbt');
    Route::post('/jabatan/destroy/', [JabatanController::class, 'destroy'])->name('destroy.jbt');

    Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.list');
    Route::post('/karyawan/store', [KaryawanController::class, 'store'])->name('karyawan.store');
    Route::post('/karyawan/show', [KaryawanController::class, 'show'])->name('karyawan.show');
    Route::post('/karyawan/edits', [KaryawanController::class, 'update'])->name('karyawan.updates');
    Route::post('/karyawan/imagesave', [KaryawanController::class, 'updateimg'])->name('karyawan.updateimg');
    Route::post('/karyawan/destroy', [KaryawanController::class, 'destroy'])->name('destroy.kyn');

    Route::get('/unduhQR', [QRCodeController::class, 'index'])->name('index');
    Route::post('/showQR', [QRCodeController::class, 'showData'])->name('showData.index');

    Route::get('/jadwal', [JadwalController::class, 'index'])->name('index');
    Route::post('/jadwal/store', [JadwalController::class, 'store'])->name('store.jadwal');

    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');

    // Route::get('/absen', [AbsenController::class, 'index'])->name('index');
    // Route::post('/absen/store', [AbsenController::class, 'store'])->name('store.absenMasuk');
    // Route::post('/absen/storeKeluar', [AbsenController::class, 'keluar'])->name('store.absenKeluar');

    Route::get('/users', [UserController::class, 'index'])->name('users.list');
    Route::post('/users/add', [UserController::class, 'store'])->name('users.store');
    Route::post('/users/update', [UserController::class, 'update'])->name('users.update');
    Route::post('/users/delete', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/edit', [UserController::class, 'edit'])->name('users.edit');

    Route::get('/temp_absen', [AbsenController::class, 'temp']);
});

Route::group(['middleware' => ['auth', 'CekLevel:Administrator,User']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/absen', [AbsenController::class, 'index'])->name('index');
    Route::post('/absen/store', [AbsenController::class, 'store'])->name('store.absenMasuk');
    Route::post('/absen/storeKeluar', [AbsenController::class, 'keluar'])->name('store.absenKeluar');

    Route::get('/manual', [ManualController::class, 'index'])->name('manual.index');
    Route::post('/manual/absen', [ManualController::class, 'store'])->name('manual.absen');
    Route::post('/manual/show', [ManualController::class, 'showData'])->name('manual.show');
});


Route::get('/', function () {
    return redirect()->route('login');
});
