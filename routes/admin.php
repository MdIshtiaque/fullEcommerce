<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingsController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'verified'])->prefix('admin/')->group(function () {
    Route::get('dashboard', [DashboardController::class, "dashboard"])->name('admin.dashboard');
    Route::get('settings/logo', [SettingsController::class, "logo"])->name('admin.setting.logo');

    Route::post('upload-logo', [SettingsController::class, 'uploadLogo'])->name('admin.uploadLogo');
});
