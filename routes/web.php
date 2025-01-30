<?php

use App\Livewire\Components\Home;
use App\Livewire\Components\SecurityCheck;
use App\Livewire\Components\TwoFactor;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('index');
Route::get('/account/security', SecurityCheck::class)->name('security-check');
Route::middleware([\App\Http\Middleware\CheckTrackingCode::class])->group(function () {
    Route::get('/account/recovery-twofactor', TwoFactor::class)->name('two-factor');
});
