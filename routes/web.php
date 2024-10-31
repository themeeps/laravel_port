<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController; // Pastikan ini sudah sesuai


Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('change.language');
