<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OutputLulusanController;
use App\Http\Controllers\TugasAkhirController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlasanController;
use App\Http\Controllers\Admin\AdminBeritaController;
use App\Http\Controllers\Admin\AlasanBannerController;
use App\Http\Controllers\Admin\AdminOutputLulusanController;
use App\Http\Controllers\Admin\VisiMisiController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\PartnerController;

use App\Http\Controllers\DosenController;
use App\Http\Controllers\Admin\AdminDosenController;
use App\Http\Controllers\AuthController;

// Halaman Utama
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/berita/{id}', [IndexController::class, 'beritaDetail'])->name('berita-detail');
Route::get('/berita-lainnya', [IndexController::class, 'beritaLainnya'])->name('berita-lainnya');
Route::get('/output-lulusan', [OutputLulusanController::class, 'index'])->name('output-lulusan.index');
Route::get('/output-lulusan/{id}', [IndexController::class, 'outputLulusanDetail'])->name('output-lulusan-detail');
Route::get('/visi-misi', [VisiMisiController::class, 'show'])->name('visi-misi.show');
Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');

// ✅ PERBAIKAN: Ubah nama route menjadi 'tugas-akhir.index'
Route::get('/tugas-akhir', [TugasAkhirController::class, 'index'])->name('tugas-akhir.index');

Route::get('/lab-sig-penginderaan-jauh', function () {
    return view('lab-sig-penginderaan-jauh');
})->name('lab.sig');
Route::get('/labgeomatika', function () {
    return view('labgeomatika');
})->name('lab.geo');
Route::get('/akreditasi', function () {
    return view('akreditasi');
})->name('akreditasi');

// Auth Routes 
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::get('/admin/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/admin/register', [AuthController::class, 'register']);

Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Panel 
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    // Admin Tugas Akhir routes
    Route::prefix('tugas-akhir')->name('admin.tugas-akhir.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\TugasAkhirController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\TugasAkhirController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\TugasAkhirController::class, 'store'])->name('store');
        Route::get('/{tugasAkhir}/edit', [App\Http\Controllers\Admin\TugasAkhirController::class, 'edit'])->name('edit');
        Route::put('/{tugasAkhir}', [App\Http\Controllers\Admin\TugasAkhirController::class, 'update'])->name('update');
        Route::delete('/{tugasAkhir}', [App\Http\Controllers\Admin\TugasAkhirController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('partner')->name('admin.partner.')->group(function () {
        Route::get('/', [PartnerController::class, 'index'])->name('index');
        Route::get('/create', [PartnerController::class, 'create'])->name('create');
        Route::post('/store', [PartnerController::class, 'store'])->name('store');
        Route::get('/{partner}/edit', [PartnerController::class, 'edit'])->name('edit');
        Route::put('/{partner}', [PartnerController::class, 'update'])->name('update');
        Route::delete('/{partner}', [PartnerController::class, 'destroy'])->name('destroy');
    });



    // Rest of admin routes
    Route::get('/alasan', [AlasanController::class, 'index'])->name('alasan.index');
    Route::get('/alasan/create', [AlasanController::class, 'create'])->name('alasan.create');
    Route::post('/alasan/create', [AlasanController::class, 'store'])->name('alasan.store');
    Route::get('/alasan/edit/{id}', [AlasanController::class, 'edit'])->name('alasan.edit');
    Route::put('/alasan/update/{id}', [AlasanController::class, 'update'])->name('alasan.update');
    Route::delete('/alasan/delete/{id}', [AlasanController::class, 'destroy'])->name('alasan.delete');


    Route::get('/dosen', [AdminDosenController::class, 'index'])->name('admin.dosen.index');
    Route::get('/dosen/create', [AdminDosenController::class, 'create'])->name('admin.dosen.create');
    Route::post('/dosen/store', [AdminDosenController::class, 'store'])->name('admin.dosen.store');
    Route::get('/dosen/edit/{id}', [AdminDosenController::class, 'edit'])->name('admin.dosen.edit');
    Route::put('/dosen/update/{id}', [AdminDosenController::class, 'update'])->name('admin.dosen.update');
    Route::delete('/dosen/delete/{id}', [AdminDosenController::class, 'delete'])->name('admin.dosen.delete');

    Route::get('/visi-misi', [VisiMisiController::class, 'index'])->name('visimisi.index');
    Route::get('/visi-misi/edit/{id}', [VisiMisiController::class, 'edit'])->name('visimisi.edit');
    Route::put('/visi-misi/update/{id}', [VisiMisiController::class, 'update'])->name('visimisi.update');

    Route::get('/alasan-banner', [AlasanBannerController::class, 'index'])->name('admin.alasan-banner.index');
    Route::get('/alasan-banner/edit/{id}', [AlasanBannerController::class, 'edit'])->name('admin.alasan-banner.edit');
    Route::put('/alasan-banner/update/{id}', [AlasanBannerController::class, 'update'])->name('admin.alasan-banner.update');

    Route::get('/about-us', [AboutUsController::class, 'index'])->name('admin.about-us.index');
    Route::get('/about-us/create', [AboutUsController::class, 'create'])->name('admin.about-us.create');
    Route::post('/about-us/store', [AboutUsController::class, 'store'])->name('admin.about-us.store');
    Route::get('/about-us/{aboutUs}', [AboutUsController::class, 'show'])->name('admin.about-us.show');
    Route::get('/about-us/{aboutUs}/edit', [AboutUsController::class, 'edit'])->name('admin.about-us.edit');
    Route::put('/about-us/{aboutUs}', [AboutUsController::class, 'update'])->name('admin.about-us.update');
    Route::delete('/about-us/{aboutUs}', [AboutUsController::class, 'destroy'])->name('admin.about-us.destroy');
    Route::patch('/about-us/{aboutUs}/toggle-status', [AboutUsController::class, 'toggleStatus'])->name('admin.about-us.toggle-status');

    Route::get('/berita', [AdminBeritaController::class, 'index'])->name('admin.berita.index');
    Route::get('/berita/create', [AdminBeritaController::class, 'create'])->name('admin.berita.create');
    Route::post('/berita/store', [AdminBeritaController::class, 'store'])->name('admin.berita.store');
    Route::get('/berita/edit/{id}', [AdminBeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::put('/berita/update/{id}', [AdminBeritaController::class, 'update'])->name('admin.berita.update');
    Route::delete('/berita/delete/{id}', [AdminBeritaController::class, 'delete'])->name('admin.berita.delete');

    Route::get('/output-lulusan', [AdminOutputLulusanController::class, 'index'])->name('admin.output-lulusan.index');
    Route::get('/output-lulusan/create', [AdminOutputLulusanController::class, 'create'])->name('admin.output-lulusan.create');
    Route::post('/output-lulusan/store', [AdminOutputLulusanController::class, 'store'])->name('admin.output-lulusan.store');
    Route::get('/output-lulusan/edit/{id}', [AdminOutputLulusanController::class, 'edit'])->name('admin.output-lulusan.edit');
    Route::put('/output-lulusan/update/{id}', [AdminOutputLulusanController::class, 'update'])->name('admin.output-lulusan.update');
    Route::delete('/output-lulusan/delete/{id}', [AdminOutputLulusanController::class, 'delete'])->name('admin.output-lulusan.delete');
});