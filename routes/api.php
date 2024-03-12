<?php

use App\Http\Controllers\CurrencyRateController;
use Illuminate\Support\Facades\Route;

Route::get('/rates', [CurrencyRateController::class, 'index'])->name('rates.index');
