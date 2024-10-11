<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController; // Pastikan ini sudah sesuai


Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
