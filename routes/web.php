<?php

use App\Http\Controllers\Admin\AssetController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ComponentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GuidelineController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ComponentDocController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\GuidelineDocController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/api/search', [SearchController::class, 'search'])->name('api.search');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('components')->name('public.components.')->group(function () {
    Route::get('/', [ComponentDocController::class, 'index'])->name('index');
    Route::get('/{component}', [ComponentDocController::class, 'show'])->name('show');
});

Route::prefix('guidelines')->name('public.guidelines.')->group(function () {
    Route::get('/', [GuidelineDocController::class, 'index'])->name('index');
    Route::get('/{guideline}', [GuidelineDocController::class, 'show'])->name('show');
});

Route::get('/downloads', [DownloadController::class, 'index'])->name('public.downloads.index');
Route::get('/downloads/all', [DownloadController::class, 'downloadAll'])->name('public.downloads.all');

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.post');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('categories', CategoryController::class);
        Route::resource('components', ComponentController::class);
        Route::resource('guidelines', GuidelineController::class);
        Route::resource('assets', AssetController::class);
    });
});
